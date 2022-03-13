<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class Merchandise extends Model {
    protected $table = 'merchandise'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "status",
        "name",
        "name_en",
        "introduction",
        "introduction_en",
        "photo",
        "price",
        "remain_count",
        "created_at",
        "updated_at",
    ];

}

?>