<?php

namespace App\Models;
use App\Traits\Database;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    use HasFactory;
    
    public function saveOrUpdate(array $data)
    {
        return $this->persist(Inventary::class, $data);
    }

}