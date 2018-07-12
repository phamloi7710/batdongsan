<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\Province;
use App\Model\District;
use Validator;
Use File;
class AjaxController extends Controller
{
    public function getDistrict($province_id)
    {
    	$districts = District::where('provinceid',$province_id)->get();
    	echo "<option value=''>Tất Cả</option>";
    	foreach($districts as $value)
    	{

    		echo "<option value='".$value->districtid."'>".$value->type." ".$value->name."</option>";
    	}
    }
    public function uploadFiles(Request $request)
    {
        if($request->ajax()){
            
            $lang = $request->lang;
            $destinationPath = 'uploads/course/1/'.$lang.'/upload';
            $rules = array('file' => 'mimes:png,jpeg,jpg,gif,mp3,pdf|max:20480'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $filesInfor = array();

            if(isset($request->files)) {
                foreach($request->files as $files){
                    if(count($files) > 0) {
                        foreach($files as $file) {
                            $extension = $file->getClientOriginalName();
                            $validator = Validator::make(array('file'=> $file), $rules);
                            if($validator->passes()){
                                // upload files
                                $fileName = time() . rand(11111, 99999) . '_' . $extension; // renameing image
                                $file->move($destinationPath, $fileName); // uploading file to given path
                                
                                $path = $destinationPath.'/'.$fileName;
                                $realPath = public_path().'/'.$path;
                                $url = url('').'/'.$destinationPath.'/'.$fileName;

                                $filesInfor[] = [
                                    'success' => [
                                        'name' => $fileName,
                                        'path' => $path,
                                        'realPath' => $realPath,
                                        'url' => $url
                                    ]
                                ];
                            } else{
                                $errors = $validator->errors();
                                $filesInfor[] = [
                                    'error' => $extension.': '.$errors->first('file'),
                                ];
                            }
                        }
                    }
                }
            }

            return response()->json($filesInfor);
            // return $filesInfor;
        }
    }
}
