<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $table = 'table_buku';
    protected $fillable = [
        'judul',
        'deskripsi',
        'harga',
        'stok',
        'rak_id'
    ];

    public  function rak() : BelongsTo{
        return $this->belongsTo(Rak::class, 'rak_id', 'id');
    }
  
}
