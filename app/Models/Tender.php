<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tender_no',
        'Title',
        'end_date',
        'tender',
       
        
    ];
}
