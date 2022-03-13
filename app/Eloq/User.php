<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class User extends Model {
    protected $table = 'users'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "email",
        "password",
        "priv",
        "name",
        "position",
        "photo",
        "introduction",
        "awards",
        "publications",
        "thesistopic",
        "thesisabstract",
        "created_at",
        "updated_at",
        "organisation",
        "telephone",
        "linka",
        "linkr",
        "linkx",
        "display",
    ];

}

?>