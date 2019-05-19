<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email'];

    public function pay()
    {
        return $this->hasOne('App\Pembayaran', 'id');
    }
}
