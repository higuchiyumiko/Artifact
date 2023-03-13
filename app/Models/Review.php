<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'Title',
        'Body',
        'Review_score',
        'updated_at',
        'created_at',
        'item_id'
    ];
    protected $table = 'review';
    public function getByLimit(int $limit_count=10){
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
    //public function getPaginateByLimit(int $limit_count1 = 5)
    //{
    // updated_atで降順に並べたあと、limitで件数制限をかける
      //  return $this->orderBy('updated_at', 'DESC')->paginate($limit_count1);
    //}
}