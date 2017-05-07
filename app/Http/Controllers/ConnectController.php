<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/5/2
 * Time: 22:16
 */

namespace App\Http\Controllers;


class ConnectController extends Controller
{
        public function connect(){
            return view('web.connect');
        }
}