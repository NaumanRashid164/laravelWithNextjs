<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.setting", get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "site_logo" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:max_width=500,max_height=500',
            "fav_logo" => 'nullable|image|mimes:svg,jpeg,png,jpg,ico|max:512|dimensions:max_width=40,max_height=40',
        ], [
            "site_logo.dimensions" => "Dimension must have max-width and max-height 500px",
            "fav_logo.dimensions" => "Dimension must have max-width and max-height 40px"
        ]);
        $requestData = $request->except("_token");
        foreach ($this->preparingToStore($request) as $key => $value) {
            Setting::updateOrCreate(
                ["key" => $key],
                [
                    "key" => $key,
                    "value" => $value,
                    "user_id" => auth()->user()->id
                ]
            );
        }
        // Cache Clear
        \Artisan::call("optimize:clear");

        return redirect()->route("admin.setting.index")->with("success", "Setting Saved");
    }
    private function preparingToStore(Request $requestData)
    {
        $requestData->merge(['theme_mode' => $requestData->theme_mode ?? 'light-mode']);
        if ($requestData->hasFile("site_logo")) {
            $logo = $requestData->file("site_logo");
            $logo->move(public_path('/'), "logo.png");
            $requestData->merge(["site_logo" => "logo.png"]);
        }
        if ($requestData->hasFile("fav_logo")) {
            $fav_logo = $requestData->file("fav_logo");
            $fav_logo->move(public_path('/'), "favicon.png");
            $requestData->merge(["fav_logo" => "favicon.png"]);
        }
        return $requestData->except("_token");
    }
}
