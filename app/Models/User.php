<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Request;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    static public function getAdmin()
    {
        $return = self::select('users.*')
            ->where('user_type', 1)
            ->where('is_delete', 0);
            if(!empty(Request::input('name'))){
                $return->where('name','like','%'.Request::input('name').'%');
            }
            if(!empty(Request::input('email'))){
                $return->where('email','like','%'.Request::input('email').'%');
            }

        $return = $return->orderBy('id', 'ASC')
            ->paginate(10);
        return $return;
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
    static public function getEmailSingle($email)
    {
        return self::where('email', '=', $email)->first();
    }
    static public function getTokenSingle($remember_token)
    {
        return User::where('remember_token', '=', $remember_token)->first();
    }
}
