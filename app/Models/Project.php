<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'requirement', 'projectFile', 'ownBy', 
        'percentageComplete', 'startDate', 'completeDate', 'deliveryDate', 
        'isDelivered', 'feedback',
    ];

    protected $dates = [
        'startDate', 'completeDate', 'deliveryDate'
    ];


}
