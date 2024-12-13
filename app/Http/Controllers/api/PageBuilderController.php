<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageBuilderController extends Controller
{
    public function save(Request $request)
    {
        $projectID = $request->id;
        $data = json_encode($request->data, true);
        $category = Category::updateOrCreate(["id" => $request->id], [ //It will not work because we save pageID in json_encode and it fetch from tbl ID
            "type" => "page",
            "name" => $request->pageName,
            "config" => $data
        ]);
        return response()->json(["data" => $category], 200);
    }
    public function load()
    {
        $projectId =  request("projectId");
        // Find IN Table and get related Data 

        $config = Category::where("id", $projectId)->value("config"); //We will fetch by PageID not Category ID
        if (is_null($config)) {
            return response()->json([], 200);
        }
        return response()->json(json_decode($config), 200);
    }

    public function uploadImg(Request $request)
    {
        if ($request->hasFile('files')) {
            $resultArray = [];
            foreach ($request->file('files') as $file) {
                if ($file->isValid()) {
                    $fileName = $file->getClientOriginalName();
                    $fileSize = $file->getSize();
                    $fileType = $file->getMimeType();
                    $fileError = $file->getError();

                    if ($fileError != UPLOAD_ERR_OK) {
                        \Log::error("File upload error: " . $fileError);
                        return response()->json(null);
                    }
                    $path = 'builder';
                    $file->storeAs($path, $fileName, 'public');
                    $storePath = "$path/$fileName";
                    if (Storage::disk('public')->exists($storePath)) {
                        $storePath = Storage::url($storePath);
                    }
                    // Read file content
                    // $content = file_get_contents($file->getPathname());

                    // Build result array
                    $result = [
                        'name' => $fileName,
                        'type' => 'image',
                        // 'src' => "data:" . $fileType . ";base64," . base64_encode($content),
                        'src' => asset($storePath),
                        'height' => 350, // You can dynamically set height and width based on your need
                        'width' => 250,
                    ];

                    $resultArray[] = $result;
                }
            }

            // Return the result array in a JSON response
            return response()->json(['data' => $resultArray]);
        }

        return response()->json(['error' => 'No files uploaded'], 400);
    }
}
