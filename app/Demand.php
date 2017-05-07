<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/5/3
 * Time: 16:44
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{

    protected $table = 'demand';

    protected $fillable = ['need','content','qq'];


}