<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/5/3
 * Time: 16:42
 */

namespace App\Http\Controllers;



use App\Repair;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RepairController extends Controller
{
        public function repair(){
            return view('web.repair');
        }


        public function save(Request $request){
            if($request->isMethod('POST')){


                $repairValidate = \Validator::make($request->input(),
                    [
                        'Repair.cbrand' => 'required',
                        'Repair.question' => 'required',
                        'Repair.qq' => 'required',
                        'Repair.number' => 'required'
                    ],[
                        'required' => ':attribute为必填项'
                    ], [
                        'Repair.cbrand' => '电脑平牌',
                        'Repair.question' => '问题描述',
                        'Repair.qq' => 'QQ',
                        'Repair.number' => '电话号码'
                    ]);

                if ($repairValidate->fails())
                {
                    return redirect()->back()->withErrors($repairValidate)->withInput();
                }







                $data = $request->input('Repair');
                if(Repair::create($data)){
                    echo '数据录入成功';


                }else{
                    echo '数据录入失败';
                    return redirect()->back();
                }
            }

        }



}