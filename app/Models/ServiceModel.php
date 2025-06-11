<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceModel extends Model
{
    use UseUuid, SoftDeletes;
    
    protected $table = 'm_services';
    protected $fillable = [
        'm_service_category_id',
        'duration',
        'duration_unit',
        'name',
        'price',
        'service_type'
    ];
    
    public function detail_order(): BelongsTo {
        return $this->belongsTo(DetailOrderModel::class);
    }
    
    public function service_category(): BelongsTo {
        return $this->belongsTo(ServiceCategoryModel::class);
    }
}
