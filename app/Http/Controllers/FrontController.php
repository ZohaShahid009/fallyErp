<?php

namespace App\Http\Controllers;
use App\Models\FrontPage;
use App\Models\Slider;
use App\Models\Client;
use App\Models\Latestproject;
use App\Models\Featuredcategory;
use App\Models\Cta;
use App\Models\Blog;
use App\Models\Seo;
use App\Models\HowitWork;
use App\Models\Category;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function createPage(Request $request){
        if ($request->isMethod('get')) {
            return view('admin.pages.front_settings.create');
        };
        $page = new FrontPage([
            'title'=> $request->get('title'),
            'link'=> $request->get('link'),
            'content'=> $request->get('content'),
        ]);
        $page->save();
        return redirect('/front_settings/list')->with('info', 'Category updated successfully');
    }
    public function frontpagelist(){
        $frontpage = FrontPage::all();
        return view('admin.pages.front_settings.list', compact('frontpage'));
    }



    public function addslider(Request $request, $id){
        if ($request->isMethod('get')) {
                return view('admin.pages.front_settings.modify.slider');
        };
        $Slider = Slider::find($id);
        $Slider->title = $request->get('title');
        $Slider->subtitle = $request->get('subtitle');

        if (isset($request->image1)  && ($request->image1->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $imageName);
            $Slider->image1 =  $imageName;
        }
        if (isset($request->image2)  && ($request->image2->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $imageName);
            $Slider->image2 =  $imageName;
        }
        if (isset($request->image3)  && ($request->image3->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image3->extension();
            $request->image3->move(public_path('images'), $imageName);
            $Slider->image3 =  $imageName;
        }
        if (isset($request->image4)  && ($request->image4->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image4->extension();
            $request->image4->move(public_path('images'), $imageName);
            $Slider->image4 =  $imageName;
        }
        $Slider->update();
        return redirect('/add/slider/1')->with('info', 'slider updated successfully');
    }

    public function addclient(Request $request, $id){
        if ($request->isMethod('get')) {
                return view('admin.pages.front_settings.modify.client');
        };
        $Slider = Client::find($id);

        if (isset($request->logo)  && ($request->logo->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);
            $Slider->logo =  $imageName;
        }
        $Slider->update();
        return redirect('/add/client/1')->with('info', 'client updated successfully');
    }

    public function addlatestproject(Request $request, $id){
        if ($request->isMethod('get')) {
            $category =  Category::all();
                return view('admin.pages.front_settings.modify.project_feature', compact('category'));
        };
        $record = Latestproject::find($id);
        $record->title = $request->get('title');
        $record->subtitle = $request->get('subtitle');
        $record->update();
        return redirect('/add/latestproject/1')->with('info', 'Latest Project updated successfully');
    }

    public function featuredcategory(Request $request, $id){
        if ($request->isMethod('get')) {
                return view('admin.pages.front_settings.modify.project_feature');
        };
        $record = Featuredcategory::find($id);
        $record->title = $request->get('title');
        $record->subtitle = $request->get('subtitle');
        $record->category = $request->get('category');

        if (isset($request->leftbanner)  && ($request->leftbanner->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->leftbanner->extension();
            $request->leftbanner->move(public_path('images'), $imageName);
            $record->leftbanner =  $imageName;
        }

        if (isset($request->rightbanner)  && ($request->rightbanner->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->rightbanner->extension();
            $request->rightbanner->move(public_path('images'), $imageName);
            $record->rightbanner =  $imageName;
        }
        $record->update();
        return redirect('/add/latestproject/1')->with('info', 'Featured category updated successfully');
    }

    public function addcta(Request $request, $id){
        if ($request->isMethod('get')) {
                return view('admin.pages.front_settings.modify.cta_blog');
        };
        $record = Cta::find($id);
        $record->title = $request->get('title');
        $record->subtitle = $request->get('subtitle');
        $record->update();
        return redirect('/add/cta/1')->with('info', 'CTA updated successfully');
    }
    public function addblog(Request $request, $id){

        $record = Blog::find($id);
        $record->title = $request->get('title');
        $record->maxblog = $request->get('maxblog');
        $record->update();
        return redirect('/add/cta/1')->with('info', 'Blog updated successfully');
    }
    public function addseo(Request $request, $id){
        if ($request->isMethod('get')) {
                return view('admin.pages.front_settings.modify.seo');
        };
        $record = Seo::find($id);
        $record->meta_title = $request->get('meta_title');
        $record->meta_discription = $request->get('meta_discription');
        $record->keywords = $request->get('keywords');

        if (isset($request->meta_image)  && ($request->meta_image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->meta_image->extension();
            $request->meta_image->move(public_path('images'), $imageName);
            $record->meta_image =  $imageName;
        }

        $record->update();
        return redirect('/add/seo/1')->with('info', 'SEO updated successfully');
    }


    public function addhow(Request $request, $id){
        if ($request->isMethod('get')) {
                return view('admin.pages.front_settings.modify.how_it');
        };
        $record = HowitWork::find($id);
        $record->title = $request->get('title');
        $record->subtitle = $request->get('subtitle');
        $record->description = $request->get('description');

        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $record->image =  $imageName;
        }

        $record->update();
        return redirect('/add/how/1')->with('info', 'How it Works updated successfully');
    }
}
