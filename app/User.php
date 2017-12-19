<?php

namespace App;

use App\Models\Reviews;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function reviews()
    {
        return $this->hasMany(Reviews::class); /*lấy tất cả dữ liệu hotels thuộc locatin này 1 thế loại
 có nhiều loại tin thì khai báo hasmany gọi đến cái class ở trong models hotels */

        /*hoặc có cách khác là*/
    }

    function isAdmin()
    {
        return $this->permission == 1;
    }

    function isEditor()
    {
        return $this->permission == 2;
    }

    function isAuthor()
    {
        return $this->permission == 3;
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
