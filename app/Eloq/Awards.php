<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class Awards extends Model {
    protected $table = 'awards'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "created_at",
        "updated_at",
        "date_received",
        "title",
        "cat",
        "sponsor",
        "personel",
        "given_to_1",
        "given_to_2",
        "given_to_3",
        "given_to_4",
        "given_to_5",
        "given_to_6",
        "given_to_7",
        "given_to_8",
        "given_to_9",
        "given_to_10",
        "given_to_11",
        "given_to_12",
        "adesc",
        "commentary",
        "photo",
        "display",
    ];

}

?>