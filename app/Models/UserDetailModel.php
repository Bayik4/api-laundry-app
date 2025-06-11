<?php

namespace App\Models;

use App\Traits\UseUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetailModel extends Model
{
    use UseUuid, SoftDeletes;
    
    protected $table = 'det_m_users';
    protected $fillable = [
        'm_user_id',
        'nik',
        'first_name',
        'last_name',
        'birth_date',
        'phone_number',
        'photo',
        'gender',
        'address'
    ];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
