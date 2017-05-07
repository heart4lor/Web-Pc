<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/5/3
 * Time: 16:43
 */

namespace App\Http\Controllers;


use App\Demand;
use Illuminate\Http\Request;

class DemandController extends Controller
{

    public function demand (){
        return view('web.demand');
    }



    public function save(Request $request){
       if($request->isMethod('POST')){

           $Demandvalidator = \Validator::make($request->input(),
               [
                    'Demand.need' => 'required',
                    'Demand.content' => 'required',
                    'Demand.qq' => 'required'
               ],
               [
                   'required' => ':attribute为必填项'
               ],
               [
                   'Demand.need' => '需求方面',
                   'Demand.content' => '需求内容',
                   'Demand.qq' => 'QQ'
               ]);


            if ($Demandvalidator->fails()){

                return redirect()->back()->withErrors($Demandvalidator)->withInput();
            }















           $data = $request->input('Demand');
           if(Demand::create($data)){
               echo '数据录入成功';
           }else{
              echo '数据录入失败';
              return redirect()->back();
           }
       }

    }
}