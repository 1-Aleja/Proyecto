<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
    use HasFactory;
    const ROL_ADMIN = 'admin';
    const ROL_CELLAR_MANAGER='cellarmanager';
    const ROL_CELLAR='cellar';
}

