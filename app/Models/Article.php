<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdArticle'; 
    public $timestamps = false;
    protected $fillable = [
            'IdArticle' ,
            'IdTVA' ,
            'IdFamilleArticle', 
            'RefArticle',
            'NumArticle' ,
            'Designation',
            'Description', 
            'Image',
            'DateCreation' ,
            'DateModification' ,
            'Unite',
            'PrixAchat',
            'DateDebut',
            'DateFin',
            'StockMin',
            'StockMax',
            'PMP',
            'PrixMin',
            'NomImage',
            'TypeImage',
            'PrixVenteArticleTTC',
            'PrixMinTTC',
            'PrixAchatTTC',
            'CodeABarre',
            'EncodageType',
            'NbreParColis',
            'QteParColis',
            'CodeFrs',
            'CodeF',
            'CodeSF',
            'Colis',
            'QteParClois',
            'IsPlinthe',
            'stock',
            'PrixHamria',
            'PrixZitoune',
            'DernierPrixAchat',
            'PMPAchat',
            'PMPVente',
            'IsMouvemente',
            'PrixAchatHamria',
            'PrixAchatZitoune',
            'Marge',
            'IsTTC',
            'RemiseMax',
            'RemiseFrs',
            'DatePeremption',
            'IdMarque',
            'CodeABarre2',
            'CodeABarreTitle',
            'PoidsNet',
            'PrixVente2',
            'PrixVente2TTC',
            'PrixVente3',
            'PrixVente3TTC',
            'IdFamille',
            'IsActive',
            'Emplacement',
            'CodeCamoflage',
            'CodeDouane',
            'DimensionInterieure',
            'DimensionExterieure',
            'EpaisseurExterieure',
            'EpaisseurInterieure',
            'LongueurExterieure',
            'LongueurInterieure',
            'LargeurExterieure',
            'LargeurInterieure',
            'HauteurExterieure',
            'HauteurInterieure',
            'NombreDentExterieure',
            'NombreDentInterieure',
            'DiametreLateralExterieure',
            'DistanceEntreTrous',
            'Pas',
            'NombreTrousInterieure',
            'NombreTrousExterieure',
            'IdMarqueFournisseur',
            'DesignationAr',
            'IdTypeArticle',
            'StockOptimal',
    ];
}