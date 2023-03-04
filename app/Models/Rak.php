<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rak extends Model
{
    use HasFactory;
    
    protected $table = 'table_rak';
    protected $fillable = [
        'rak',
        'kategori'
    ];

    public function book() : HasMany{
        return $this->hasMany(Book::class, 'id','rak_id');
    }
    
       
}
