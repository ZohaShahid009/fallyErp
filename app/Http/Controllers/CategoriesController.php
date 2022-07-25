<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Image;

class CategoriesController extends Controller
{
    public function addCategories(Request $request){
        if ($request->isMethod('get')) {
            return view('admin.pages.categories.create');
        };

        $request->validate([
            'title'=> 'required',
        ]);
        $imageName = "blank.png";
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'uploaded_images/cat_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    };
            };
        $category = new Category([
            'title'=> $request->get('title'),
            'image'=> $imageName,
        ]);
        $category->save();
        return redirect('/categories/list')->with('info', 'Category updated successfully');
    }

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
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'uploaded_images/cat_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    }
                    $category->image = $imageName;
            }
        $category->update();
        return redirect('/categories/list')->with('info', 'Category updated successfully');
    }


    public function deletecategories($id){
        Category::find($id)->delete();
        return back();
    }








    public function addsubCategories(Request $request){
        if ($request->isMethod('get')) {
            return view('admin.pages.categories.subCategory.create');
        };

        $request->validate([
            'title'=> 'required',
        ]);
        $imageName = "blank.png";
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'uploaded_images/sub_cat_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    };
            };
        $subcategory = new SubCategory([
            'title'=> $request->get('title'),
            'parent_cat_id'=> $request->get('parent_cat_id'),
            'image'=> $imageName,
        ]);
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
                return view('admin.pages.categories.subCategory.edit', compact('subcategory'));
        };
        $subcategory = SubCategory::find($id);
        $subcategory->title = $request->get('title');
        $subcategory->parent_cat_id = $request->get('parent_cat_id');
        if($request->hasFile('profile_avatar')){
            $img_tmp = $request->file('profile_avatar');
                if($img_tmp->isValid()){
                    $extension = $img_tmp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension;
                    $imagePath = 'uploaded_images/sub_cat_images/'.$imageName;
                    Image::make($img_tmp)->save($imagePath);
                    }
                    $subcategory->image = $imageName;
            }
        $subcategory->update();
        return redirect('/sub-categories/list')->with('info', 'Category updated successfully');
    }


    public function deletesubcategories($id){
        SubCategory::find($id)->delete();
        return back();
    }
}
