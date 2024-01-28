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
 * Class ServiceDetail
 * 
 * @property int $id
 * @property int $service_id
 * @property int $applied_service_id
 * @property float $cost
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AppliedService $appliedService
 * @property Service $service
 *
 * @package App\Models
 */
class ServiceDetail extends Model
{
	use HasFactory;

	protected $table = 'service_details';

	protected $casts = [
		'service_id' => 'int',
		'applied_service_id' => 'int',
		'cost' => 'float'
	];

	protected $fillable = [
		'service_id',
		'applied_service_id',
		'cost'
	];

	public function appliedService(): BelongsTo
	{
		return $this->belongsTo(AppliedService::class);
	}

	public function service(): BelongsTo
	{
		return $this->belongsTo(Service::class);
	}
}
