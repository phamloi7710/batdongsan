<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Email;
use App\Model\MangXaHoi;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
class ConfigController extends Controller
{
    public function getGeneralConfig()
    {
        $config = Config::where('id', '>', 0)->first();
        return view('admin.pages.config.general',['config'=>$config]);
    }
    public function postGeneralConfig(Request $request)
    {
        $pSets = Config::all()->count();
        if($pSets > 0) { 
            $config = Config::all()->first(); 
            $config->name = $request->txtName;
            $config->address = $request->txtAddress;
            $config->phone = $request->txtPhone;
            $config->fax = $request->txtFax;
            $config->hotline = $request->txtHotLine;
            $config->email = $request->txtEmail;
            if($request->hasFile('logo')) {
                $rules = $config->rules;
                $file = array('image' => Input::file('logo'));
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                    return redirect()->back();
                } else {
                    if (Input::file('logo')->isValid()) {
                        $destinationPath = 'uploads/images';
                        $extension = Input::file('logo')->getClientOriginalExtension();
                        $fileName = time() . rand(11111, 99999) . '.' . $extension;
                        Input::file('logo')->move($destinationPath, $fileName);
                        $config->logo = $fileName;
                    } else {
                        Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                        return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    }
                }
            }
            if($request->hasFile('favicon')) {
                $rules = $config->rules;
                $file = array('image' => Input::file('favicon'));
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                    return redirect()->back();
                } else {
                    if (Input::file('favicon')->isValid()) {
                        $destinationPath = 'uploads/images';
                        $extension = Input::file('favicon')->getClientOriginalExtension();
                        $fileName = time() . rand(11111, 99999) . '.' . $extension;
                        Input::file('favicon')->move($destinationPath, $fileName);
                        $config->favicon = $fileName;
                    } else {
                        Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                        return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    }
                }
            }
            if($request->hasFile('image')) {
                $rules = $config->rules;
                $file = array('image' => Input::file('image'));
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                    return redirect()->back();
                } else {
                    if (Input::file('image')->isValid()) {
                        $destinationPath = 'uploads/images';
                        $extension = Input::file('image')->getClientOriginalExtension();
                        $fileName = time() . rand(11111, 99999) . '.' . $extension;
                        Input::file('image')->move($destinationPath, $fileName);
                        $config->image = $fileName;
                    } else {
                        Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                        return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    }
                }
            }
            $config->seoTitle = $request->txtSeoTitle;
            $config->seoDescription = $request->txtSeoDescription;
            $config->seoKeywords = $request->txtSeoKeywords;
            $config->save();
            return redirect()->route('getGeneralConfig')->with('success', 'Cập Nhật Thông Tin Thành Công!');          
        }else{
            $config = new Config();
            $config->name = $request->txtName;
            $config->address = $request->txtAddress;
            $config->phone = $request->txtPhone;
            $config->fax = $request->txtFax;
            $config->hotline = $request->txtHotLine;
            $config->email = $request->txtEmail;
            if($request->hasFile('logo')) {
                $rules = $config->rules;
                $file = array('image' => Input::file('logo'));
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                    return redirect()->back();
                } else {
                    if (Input::file('logo')->isValid()) {
                        $destinationPath = 'uploads/images';
                        $extension = Input::file('logo')->getClientOriginalExtension();
                        $fileName = time() . rand(11111, 99999) . '.' . $extension;
                        Input::file('logo')->move($destinationPath, $fileName);
                        $config->logo = $fileName;
                    } else {
                        Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                        return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    }
                }
            }
            if($request->hasFile('favicon')) {
                $rules = $config->rules;
                $file = array('image' => Input::file('favicon'));
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                    return redirect()->back();
                } else {
                    if (Input::file('favicon')->isValid()) {
                        $destinationPath = 'uploads/images';
                        $extension = Input::file('favicon')->getClientOriginalExtension();
                        $fileName = time() . rand(11111, 99999) . '.' . $extension;
                        Input::file('favicon')->move($destinationPath, $fileName);
                        $config->favicon = $fileName;
                    } else {
                        Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                        return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    }
                }
            }
            if($request->hasFile('image')) {
                $rules = $config->rules;
                $file = array('image' => Input::file('image'));
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    Session::flash('error', 'Cho phép tệp định dạng tải lên: .jpeg, .bmp, .png và cho kích thước tối đa tối đa: 20000 Kb');
                    return redirect()->back();
                } else {
                    if (Input::file('image')->isValid()) {
                        $destinationPath = 'uploads/images';
                        $extension = Input::file('image')->getClientOriginalExtension();
                        $fileName = time() . rand(11111, 99999) . '.' . $extension;
                        Input::file('image')->move($destinationPath, $fileName);
                        $config->image = $fileName;
                    } else {
                        Session::flash('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                        return redirect()->back()->with('error', 'Đã xảy ra sự cố khi cập nhật nội dung của bạn');
                    }
                }
            }
            $config->seoTitle = $request->txtSeoTitle;
            $config->seoDescription = $request->txtSeoDescription;
            $config->seoKeywords = $request->txtSeoKeywords;
            $config->save();
            return redirect()->route('getGeneralConfig')->with('success', 'Cập Nhật Thông Tin Thành Công!');
        }
        
    }













    public function getEmailConfig()
    {
        $email = Email::where('id', '>', 0)->first();
        return view('admin.pages.config.email',['email'=>$email]);
    }
    public function postEmailConfig(Request $request)
    {
        
        try {
            $pSets = Email::all()->count();

            if($pSets > 0) {
                $email = Email::where('id', '>', 0)->first();
                $email->sender = $request->txtSender;
                $email->email = $request->txtEmail;
                $email->password = $request->txtPassword;
                $email->driver = $request->txtDriver;
                $email->host = $request->txtHost;
                $email->port = $request->txtPort;
                $email->save();
                
                
            } else {
                $email = new Email;
                $email->sender = $request->txtSender;
                $email->email = $request->txtEmail;
                $email->password = $request->txtPassword;
                $email->driver = $request->txtDriver;
                $email->host = $request->txtHost;
                $email->port = $request->txtPort;
                $email->save();
                

            }
            return redirect()->back()->with('success','Cập Nhật Thành Công');

        } catch (\Exception $e) {
            //throw $e;
            $request->session()->flash('error', 'Cập Nhật Không Thành Công!');
            return redirect()->route('getEmailConfig');
        }
    }
    public function getMangXaHoi()
    {
         $mangxahoi = MangXaHoi::where('id', '>', 0)->first();
        return view('admin.pages.config.mangxahoi',['mangxahoi'=>$mangxahoi]);
    }
    public function postMangXaHoi(Request $request)
    {
        try {
            $pSets = MangXaHoi::all()->count();

            if($pSets > 0) {
                $mangxahoi = MangXaHoi::where('id', '>', 0)->first();
                $mangxahoi->facebook = $request->txtFacebook;
                $mangxahoi->youtube = $request->txtYoutube;
                $mangxahoi->google = $request->txtGoogle;
                $mangxahoi->twitter = $request->txtTwitter;
                $mangxahoi->save();
                
                
            } else {
                $mangxahoi = new MangXaHoi;
                $mangxahoi->facebook = $request->txtFacebook;
                $mangxahoi->youtube = $request->txtYoutube;
                $mangxahoi->google = $request->txtGoogle;
                $mangxahoi->twitter = $request->txtTwitter;
                $mangxahoi->save();
                

            }
            return redirect()->back()->with('success','Cập Nhật Thành Công');

        } catch (\Exception $e) {
            //throw $e;
            $request->session()->flash('error', 'Cập Nhật Không Thành Công!');
            return redirect()->route('getMangXaHoi');
        }
    }
}
