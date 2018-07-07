<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use Illuminate\Support\Facades\Input;
class ConfigController extends Controller
{
    public function getGeneralConfig()
    {
        $general = Config::where('key', 'general')->value('value');
        $general = unserialize($general);
        return view('admin.pages.config.general',['general'=>$general]);
    }
    public function postGeneralConfig(Request $request)
    {
        
        $general = [
            'name' => $request->txtName,
            'address' => $request->txtAddress,
            'phone' => $request->txtPhone,
            'hotline' => $request->txtHotLine,
            'email' => $request->txtEmail,
            'logo' => $request->logo,
            'favicon' => $request->favicon,
            'image' => $request->image,
        ];
        $general = serialize($general);
        try {
            $pSets = Config::where('key','general')->count();

            if($pSets > 0) {
                Config::where('key','general')->update(['value'=>$general]);
                
            } else {
                $generalConfig = new Config;
                $generalConfig->key = 'general';
                $generalConfig->value = $general;
                
                $generalConfig->save();

            }
            return redirect()->route('getGeneralConfig')->with('success', 'Cập Nhật Thành Công!');

        } catch (\Exception $e) {
            //throw $e;
            $request->session()->flash('error', 'Cập Nhật Không Thành Công!');
            return redirect()->route('getGeneralConfig');
        }
    }













    public function getEmailConfig()
    {
        $email = Config::where('key', 'email')->value('value');
        $email = unserialize($email);
        return view('admin.pages.config.email',['email'=>$email]);
    }
    public function postEmailConfig(Request $request)
    {
        
        $email = [
            'sender' => $request->txtSender,
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            'driver' => $request->txtDriver,
            'host' => $request->txtHost,
            'port' => $request->txtPort,
            'encrypt' => $request->radioEncrypt,
        ];
        $email = serialize($email);
        try {
            $pSets = Config::where('key','email')->count();

            if($pSets > 0) {
                Config::where('key','email')->update(['value'=>$email]);
                
            } else {
                $emailConfig = new Config;
                $emailConfig->key = 'email';
                $emailConfig->value = $email;
                
                $emailConfig->save();

            }
            return redirect()->route('getEmailConfig')->with('success', 'Cập Nhật Thành Công!');

        } catch (\Exception $e) {
            //throw $e;
            $request->session()->flash('error', 'Cập Nhật Không Thành Công!');
            return redirect()->route('getEmailConfig');
        }
    }
}
