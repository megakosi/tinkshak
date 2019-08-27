<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable implements  MustVerifyEmail {
    //
    use AuthenticableTrait;
    use Notifiable;
    protected $fillable = ['username' , 'name' , 'contact' , 'country' , 'email' , 'profile' , 'user_id' ,
        'remember_token' , 'password', 'product_type', 'paypal_email_address' , 'bank_name' , 'account_name' ,
        'account_number','bio' ,'facebook_username' , 'twitter_username' , 'instagram_username'];
    //Table name

    //protected $guarded = ['email_verified_at'];

    protected $hidden = ['password' , 'remember_token'];

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
    public $incrementing = false;
    protected $keyType = 'string';
}
