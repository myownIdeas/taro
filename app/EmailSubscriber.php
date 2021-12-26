<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSubscriber extends Model
{
    protected $table = 'subscribed_email';
    protected $fillable = [
        'email', 'subscribe_email_uuid'
    ];//for update
    public function format($email){
        return [
            'email'=>$this->email,
        ];
    }
}
