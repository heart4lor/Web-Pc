<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/5/3
 * Time: 16:44
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{

    protected $table = 'repair';

    protected $primarykey = 'id';

    protected $fillable = ['cbrand','question','qq','number'];
}