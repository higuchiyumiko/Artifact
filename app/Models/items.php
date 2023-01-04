<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'Name',
        'Item_image',
        'Market_name',
        'Allergy',
        //'created_at',
        //'updated_at',
        //'deleted_at',
        'category_id'
    ];
    protected $table = 'items';
    public function getByLimit(int $limit_count=10){
        return $this->orderBy('updated_at','DESC')->limit($limit_count);
    }
}
