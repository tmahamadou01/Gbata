<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['titre', 'type_maison', 'piece', 'loyer', 'commune', 'zone', 'description', 'contact', 'caution', 'plus_information','image1', 'image2', 'image3', 'type_offers_id', 'users_id', 'prix','code_offer','state_offer'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function GenerateCodeOffer()
    {
        $list = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code = '';
        while (strlen($code) != 5) {
            $code .= $list[rand(0, 63)];
        }
        return $code;
    }
}
