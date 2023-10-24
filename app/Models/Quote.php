<?php

namespace App\Models;
// namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'equipment',
        'notes',
    ];

    // Define any additional methods, relationships, or attributes here.

    // Example of a relationship if you have another model, e.g., QuoteItem
    public function quoteItems()
    {
        return $this->hasMany(QuoteItem::class);
    }
}
