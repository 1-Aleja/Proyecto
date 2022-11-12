<?php

namespace App\Models;

use App\Trait\Database;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Edit extends Model
{
    use HasFactory;
    use Database;
    
    public function saveOrUpdate(array $data)
    {       
        
        return $this->persist(Edit::class, $data,$id);
    }

}