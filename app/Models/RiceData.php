<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiceData extends Model
{
    use HasFactory;

    // Set the fillable properties for mass assignment
    protected $fillable = [
        'particulars',
        'variety_code',
        'state',
        'country',
        'region',
        'special_group',
        'milling_properties',
        'physical_properties',
        'av_chalky_percent',
        'chemical_properties',
        'texture_analyzer_mouth_feel',
        'pasting_properties_rva_analysis',
        'cooking_properties',
        'aroma_ppb',
        'minerals_data',
        'gpc',
        'gi',
        'bioactives',
        'fatty_acid_percent',
        'bioactives_mg_per_100g',
    ];
}
