<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends \Eloquent
{
    //
	protected $table="locations";
	protected $fillable=['name','image','content','slug','data']; /*khai báo các trường data nhập vào cơ sơt dữ liệu */
	public $timestamps=false;
	protected $casts=[
		'data'=>'array' /*khai báo kiểu dữ liệu mà các trường nhập vào*/
	];

	function hotels(){
		return $this->hasMany(Hotels::class,'location_id'); /*lấy tất cả dữ liệu hotels thuộc locatin này 1 thế loại
 có nhiều loại tin thì khai báo hasmany gọi đến cái class ở trong models hotels */

		/*hoặc có cách khác là*/
	}
}
