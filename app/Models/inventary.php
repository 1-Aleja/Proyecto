<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Trait\Database;

class Inventary extends Model
{

    public $timestamps = false;
    use HasFactory;
    use Database;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference',
        'name',
        'cost_price',
        'sale_price',
        'quantity_available',
        'description',
        'comment',
        'toy_image'
    ];

    public function getInventaries()
    {
        Inventary::all();
        
    }
    public function getFilterByName($nombre)
    {
        return  Inventary::where('name', 'like', '%'.$nombre.'%')->get();
    }
    public function saveOrUpdate(array $data)
    {
        return $this->persist(Inventary::class, $data);
    }

    

    
}
