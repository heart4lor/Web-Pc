<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/4/26
 * Time: 19:07
 */

namespace App\Http\Controllers;


class WebController extends Controller
{

    public function index(){
        return view('web.index');
    }


}