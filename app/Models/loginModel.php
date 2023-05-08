<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class loginModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

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
    


    // public static function users($email, $pass)
    // {
    //     DB::beginTransaction();
    //     try
    //     {
    //         $pass   = md5($pass);
    //         $query  = DB::select("SELECT * from pos_users where email = '$email' and password = '$pass'");
    //         DB::commit();
    //         return $query;
    //     }
    //     catch(Exception $e)
    //     {
    //         DB::rollBack();
    //         return RESPONSE::client($e->getMessage());
    //     }
    // }
}
