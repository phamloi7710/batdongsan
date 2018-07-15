<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\LienHe;
use App\Model\Config;
class LienHeController extends Controller
{
    public function getLienHe()
    {
    	$config = Config::where('id','>',0)->first(); 
    	return view('frontend.pages.lienhe',['config'=>$config]);
    }
    public function postLienHe(Request $request)
    {
    	$lienhe = new LienHe();
    	$lienhe->name = $request->txtName;
    	$lienhe->address = $request->txtAddress;
    	$lienhe->email = $request->txtEmail;
    	$lienhe->phone = $request->txtPhone;
    	$lienhe->title = $request->txtTitle;
    	$lienhe->content = $request->content;
    	$lienhe->save();
    	return redirect()->route('getLienHe')->with('success', 'Chúng tôi sẽ trả lời bạn ngay sau khi nhận được thông tin của bạn. Xin chân thành cảm ơn bạn đã liên hệ với chúng tôi!');
    }
}
