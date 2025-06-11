<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderModel extends Model
{
    use UseUuid, SoftDeletes;

    protected $table = 't_orders';
    protected $fillable = [
        'm_user_id',
        'm_customer_id',
        'invoice_number',
        'total_price',
        'discount',
        'final_price',
        'status',
        'order_date',
        'due_date',
        'pickup_date',
        'payment_status'
    ];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
    
    public function customer(): BelongsTo {
        return $this->belongsTo(CustomerModel::class);
    }
    
    public function detail_orders(): HasMany {
        return $this->hasMany(DetailOrderModel::class);
    }
    
    public function payment(): HasOne {
        return $this->hasOne(PaymentModel::class);
    }
}
