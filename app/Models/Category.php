<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'id',
        'Name',
    ];
    protected $table = 'category';
    public function getByLimit(int $limit_count=10){
        return $this->orderBy('updated_at','DESC')->limit($limit_count);
    }
    public function items(){
        return $this->hasMany(items::class);
    }
   // public function getPaginateByLimit(int $limit_count = 10)
//{
    // updated_atで降順に並べたあと、limitで件数制限をかける
  //  return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
//}
}