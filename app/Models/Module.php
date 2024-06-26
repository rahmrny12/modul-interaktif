<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BeyondCode\Comments\Traits\HasComments;

class Module extends Model
{
    use HasFactory, HasComments;

    protected $guarded = ['id'];
}
