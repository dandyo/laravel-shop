<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rugs extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'asset_number',
        'design_name',
        'shape',
        'style',
        'size_width_ft',
        'size_length_ft',
        'size_width_in',
        'size_length_in',
        'size_width_m',
        'size_length_m',
        'sku',
        'material',
        'collection',
        'primary_color',
        'secondary_color',
        'age',
        'construction',
        'country',
        'image',
        'gallery',
        'description',
        'status'
    ];
}
