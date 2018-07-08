<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DuAn\Category;
use App\Model\DuAn\DuAn;
class DuAnController extends Controller
{
    public function getDetail($slug)
    {
        $duan = DuAn::where('slug', $slug)->first();
        return view('frontend.pages.chitietduan');
    }
}
