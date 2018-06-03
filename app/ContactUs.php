<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_uses';
    protected $hidden = ['created_at','updated_at'];

    protected $fillable =['fullname',
    'phone_number',
    'email',
    'topic',
    'question'];
}
