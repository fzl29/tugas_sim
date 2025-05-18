<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Queue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'queue_number',
        'user_id',
        'book_id',
        'loan_date',
        'return_date',
        'status',
    ];

    public static function generateCode()
    {
        $last = self::orderBy('id', 'desc')->first();
        $number = $last ? ((int) substr($last->queue_code, 3)) + 1 : 1;
        return 'BK-' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function loan()
    {
        return $this->hasOne(Loan::class);
    }
}