<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['titre', 'type_maison', 'piece', 'loyer', 'commune', 'zone', 'description', 'contact', 'caution', 'plus_information','image1', 'image2', 'image3', 'type_offers_id', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
