<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mail\notification;
use Illuminate\Support\Facades\Mail;

class Todo extends Model
{
    //
    protected $guarded =[
    ];

    public function completed($completed = true){
        $this->update([
            'completed'=> $completed
        ]);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($todo){
            // exetuced onlyafter a new project is created. It is a listener.

        Mail::to($todo->owner->email)->send(
            new notification($todo)
        );
        });
    }




}
