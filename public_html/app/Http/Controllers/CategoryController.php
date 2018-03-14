<?php
/**
 * Created by PhpStorm.
 * User: Campbell Louis
 * Date: 2/16/2018
 * Time: 2:26 PM
 */

namespace App\Http\Controllers;


use App\Document;
use TCG\Voyager\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCategory($slug)
    {
       if (Category::where('slug',$slug)->count()){
           $cat = Category::where('slug',$slug)->first();
           $documents = Document::where('category_id',$cat->id)->get();
           return view('documents',compact('documents','cat'));
       }
    }

}