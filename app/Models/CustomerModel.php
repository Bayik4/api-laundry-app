<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerModel extends Model
{
    use UseUuid, SoftDeletes;
    
    protected $table = 'm_customers';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address'
    ];
    
    public function orders(): HasMany {
        return $this->hasMany(OrderModel::class);
    }
}
