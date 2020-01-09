<?php
namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $fillable = [
        'total_quanity',
        'total_price',
        'note',
        'status',
        'user_id',
    ];
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
