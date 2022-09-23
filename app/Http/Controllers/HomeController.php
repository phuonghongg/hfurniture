<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Blog;

class HomeController extends Controller
{
    //
    public function index(){
        $viewers = Products::orderBy('viewers', 'asc')->limit(8)->get();
        $new_product = Products::orderBy('created_at', 'asc')->limit(8)->get();
        $blog = Blog::limit(3)->get();
        $data = ['viewers' => $viewers, 'new_product' => $new_product, 'blog' => $blog];
        return view('client/index', $data);
    }

    public function get_product_by_slug_cat($slug){
        $products = DB::table('categories')
        ->join('products', 'categories.id', '=', 'products.id_category')
        ->where('categories.slug', $slug)
        ->get();
        return view('client/products/list',[
            'products' =>$products
        ]);
    }

    public function get_detail_product($slug){
        $product = Products::where('slug', $slug)->first();
        $related_product = Products::where('slug', $slug)->get();
        return view('client/products/details', [
            'product' => $product,
            'related_product' => $related_product
        ]);
    }

    public function get_all_blog(){
        $blog = Blog::all();
        return view('client/news/list',[
            'blog' => $blog
        ]);
    }

    public function get_blog_by_slug($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('client/news/details', ['blog' => $blog]);
    }
}
