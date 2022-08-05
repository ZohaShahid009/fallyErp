<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Image;

class CategoriesController extends Controller
{
    // Add main category
    public function addCategories(Request $request){
        if ($request->isMethod('get')) {
            return view('admin.pages.categories.create');
        };

        $request->validate([
            'title'=> 'required',
        ]);

        $category = new Category([
            'title'=> $request->get('title'),
            // 'image'=> $imageName,
        ]);
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $category->image =  $imageName;
        }
        $category->save();
        return redirect('/categories/list')->with('info', 'Category updated successfully');
    }

    // View main Category
    public function categorieslist(){
        $category = Category::all();
        return view('admin.pages.categories.list', compact('category'));
    }
    public function editCategories(Request $request, $id){
        if ($request->isMethod('get')) {
                $category =  Category::find($id);
                return view('admin.pages.categories.edit', compact('category'));
        };
        $category = Category::find($id);
        $category->title = $request->get('title');
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $category->image =  $imageName;
        }
        $category->update();
        return redirect('/categories/list')->with('info', 'Category updated successfully');
    }

    public function deletecategories($id){
        Category::find($id)->delete();
        return back();
    }

    // Sub category Section Started
    public function addsubCategories(Request $request){
        if ($request->isMethod('get')) {
            $category = Category::all();
            return view('admin.pages.categories.subCategory.create', compact('category'));
        };

        $request->validate([
            'title'=> 'required',
        ]);

        $subcategory = new SubCategory([
            'title'=> $request->get('title'),
            'parent_cat_id'=> $request->get('parent_cat_id'),

        ]);
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $subcategory->image =  $imageName;
        }
        $subcategory->save();
        return redirect('/sub-categories/list')->with('info', 'Sub Category updated successfully');
    }

    public function subcategorieslist(){
        $subcategory = SubCategory::all();
        return view('admin.pages.categories.subCategory.list', compact('subcategory'));
    }

    public function editsubCategories(Request $request, $id){
        if ($request->isMethod('get')) {
                $subcategory =  SubCategory::find($id);
                $category = Category::all();
                return view('admin.pages.categories.subCategory.edit', compact('subcategory','category'));
        };
        $subcategory = SubCategory::find($id);
        $subcategory->title = $request->get('title');
        $subcategory->parent_cat_id = $request->get('parent_cat_id');
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $subcategory->image =  $imageName;
        }
        $subcategory->update();
        return redirect('/sub-categories/list')->with('info', 'Category updated successfully');
    }

    public function deletesubcategories($id){
        SubCategory::find($id)->delete();
        return back();
    }
}
