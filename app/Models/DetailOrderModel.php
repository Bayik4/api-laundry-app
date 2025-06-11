<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailOrderModel extends Model
{
    use UseUuid, SoftDeletes;
    
    protected $table = 'det_m_orders';
    protected $fillable = [
        't_order_id',
        'm_service_id',
        'weight',
        'quantity',
        'total_price',
        'discount',
        'final_price',
        'notes'
    ];

    public function order(): BelongsTo {
        return $this->belongsTo(OrderModel::class);
    }
    
    public function service(): HasOne {
        return $this->hasOne(ServiceModel::class);
    }
}
