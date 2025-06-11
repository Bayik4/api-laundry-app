<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategoryModel extends Model
{
    use UseUuid, SoftDeletes;

    protected $table = 'm_service_categories';
    protected $fillable = [
        'name'
    ];
    
    public function services(): HasMany {
        return $this->hasMany(ServiceModel::class);
    }
}
