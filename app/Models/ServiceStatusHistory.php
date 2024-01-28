<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class ServiceStatusHistory
 * 
 * @property int $id
 * @property int $applied_service_id
 * @property int $status_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AppliedService $appliedService
 * @property ServiceStatus $serviceStatus
 *
 * @package App\Models
 */
class ServiceStatusHistory extends Model
{
	use HasFactory;

	protected $table = 'service_status_histories';

	protected $casts = [
		'applied_service_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'applied_service_id',
		'status_id'
	];

	public function appliedService(): BelongsTo
	{
		return $this->belongsTo(AppliedService::class);
	}

	public function serviceStatus(): BelongsTo
	{
		return $this->belongsTo(ServiceStatus::class, 'status_id');
	}
}
