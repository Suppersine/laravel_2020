<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class Transaction extends Model {
    protected $table = 'transaction'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "id",
        "user_id",
        "merchandise_id",
        "price",
        "buy_count",
        "total_price",
    ];

    public function Merchandise() {
        return $this->hasOne('App\Eloq\Merchandise',
                            'id',
                            'merchandise_id');
    }

}

?>