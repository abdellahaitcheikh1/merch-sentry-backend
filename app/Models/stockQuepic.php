<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockQuepic extends Model
{
    use HasFactory;
    protected $connection = "mysql_Quepic";
    public $timestamps = false;

    protected $fillable= [
        'IdArticle',
        "quantité",	
        "prix_ht_1_magasin"	,
        "prix_ht_2_magasin",	
        "prix_ht_3_magasin"	,
        "prix_ttc_magasin",
    ];

}
