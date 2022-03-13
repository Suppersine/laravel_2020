<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class FXG extends Model {
    protected $table = 'news'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "type",
        "title",
        "ndesc",
        "visits",
        "created_at",
        "updated_at",
        "display",
        "newsdate",
    ];

}

?>