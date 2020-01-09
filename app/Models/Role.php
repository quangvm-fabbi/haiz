<?php
namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];
    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
