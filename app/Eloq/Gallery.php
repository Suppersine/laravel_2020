<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class Gallery extends Model {
    protected $table = 'gallery'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "created_at",
        "updated_at",
        "display",
        "photo",
        "caption",
    ];

}

?>