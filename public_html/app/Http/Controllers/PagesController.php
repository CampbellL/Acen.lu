<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PagesController extends \App\Http\Controllers\Controller
{
    public function show()
    {

        $slug = request()->segment(1);
        $page = \TCG\Voyager\Models\Page::where('slug', $slug)
            ->first();
        return view('show-page', [
            'page' => $page,
        ]);
    }
    public function getPage($slug)
    {
        $page = DB::table('pages')->where('slug', $slug)->first();
        if($page->auth_required && !Auth::check()){
            abort(403,"unauthorized action");
        }
        return view('show-page', ['page' => $page]);
    }
}