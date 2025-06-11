<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentModel extends Model
{
    use UseUuid, SoftDeletes;

    protected $table = 'm_payments';
    protected $fillable = [
        't_order_id',
        'amount_paid',
        'proof_image',
        'payment_method',
        'paid_at'
    ];
    
    public function order(): BelongsTo {
        return $this->belongsTo(OrderModel::class);
    }
}
