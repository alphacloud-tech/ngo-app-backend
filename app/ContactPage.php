<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mail;
use App\Mail\ContactMail;

class ContactPage extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "adesanjo470@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
