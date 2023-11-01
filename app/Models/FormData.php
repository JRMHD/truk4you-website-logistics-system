<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = [
        'pickupLocation',
        'pickupDateTime',
        'deliveryLocation',
        'deliveryDateTime',
        'equipmentType',
        'loadType',
        'loadDimensions',
        'commodityDescription',
        'contactName',
        'contactPhone',
        'contactEmail',
        'loadDocPath',
    ];

    // ... rest of your model code
}

