<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Locality;
use App\Models\Product;
use App\Models\Shahar;

class PageController extends Controller
{
    public function main()
    {
        $mehmonxonalar = Locality::all()->where('slug','mehmonxona');
        return view('main')->with('mehmonxonas', $mehmonxonalar);
    }

    public function city()
    {
        $cities = Shahar::get();
        return view('shahar')->with('cities', $cities);
    }

    public function history()
    {
        $histories = Locality::all()->where('slug','ziyoratgoh');
        return view('tarix')->with('histories',$histories);
    }

    public function hotel(Category $category)
    {
        $mehmonxonalar = Locality::all()->where('slug','mehmonxona');
        return view('mexmonxona')->with('mehmonxonalar',$mehmonxonalar);
    }

    public function contact()
    {
        return view('aloqa');
    }

    public function category($city_slug)
    {
        if (Shahar::where('city_slug', $city_slug)->exists()) {
            $city = Shahar::where('city_slug', $city_slug)->first();
            $cate = Category::where('shahar_id', $city->id)->get();
            return view('pages.category', compact('city', 'cate'));
        }
    }

    public function locality($city_slug, $slug,)
    {
        $city = Shahar::where('city_slug', $city_slug)->first();

        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('shahar_id', $city->id)
                ->where('slug', $slug)
                ->first();
            $localities = Locality::where('category_id', $category->id)->get();
            return view('pages.locality', compact('category', 'localities'));
        }
    }

    public function locshow(Locality $locality)
    {
        return view('pages.show')->with([
            'locality' => $locality
        ]);;
    }
}
