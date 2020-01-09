<?php
namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;
class Cake extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quanity',
        'price',
        'price_sale',
        'status',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
