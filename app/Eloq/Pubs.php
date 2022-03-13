<?php

namespace App\Eloq; //id'y the folder

use Illuminate\Database\Eloquent\Model; //API provided by laravel

class Pubs extends Model {
    protected $table = 'publications'; //The Table Name
    protected $primaryKey = 'id';
    protected $fillable = [
        "created_at",
        "updated_at",
        "date_pub",
        "title",
        "cat",
        "personel",
        "written_by_1",
        "written_by_2",
        "written_by_3",
        "written_by_4",
        "written_by_5",
        "written_by_6",
        "written_by_7",
        "written_by_8",
        "written_by_9",
        "written_by_10",
        "written_by_11",
        "written_by_12",
        "abstract",
        "intro",
        "methods",
        "result_discn",
        "conclusions",
        "refren",
        "linkz",
        "display",
    ];

}
?>