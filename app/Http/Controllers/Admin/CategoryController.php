<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    private function FieldToShow(string $mode)
    {
        $fields =   [
            CategoryType::WEB => ["name"],
        ];
        return $fields[$mode];
    }
    /**
     * Display a listing of the resource.
     */
    public function index($mode)
    {
        session()->put("category_mode", $mode);
        $data = [];


        $data["title"] = "Category";
        $data["list"] = [
            "ID" => "id",
            "Name" => "name",
        ];
        $data["records"] = Category::where("type", $mode)->with("children")
            ->byParent()->Active()->latest()->get(array_values($data["list"]));
        return view("admin.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mode = session("category_mode", CategoryType::WEB);
        $fieldToShow = $this->FieldToShow($mode);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
