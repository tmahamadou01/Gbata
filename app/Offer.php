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
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < 5; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        return $string;
    }
}
