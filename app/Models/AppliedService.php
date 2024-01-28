<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class AppliedService
 * 
 * @property int $id
 * @property int $car_id
 * @property int $applied_by
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $appliedBy
 * @property Car $car
 * @property Collection|ServiceDetail[] $serviceDetails
 * @property Collection|ServiceStatusHistory[] $serviceStatusHistories
 * @property Collection|UsedProduct[] $usedProducts
 *
 * @package App\Models
 */
class AppliedService extends Model
{
	use HasFactory;

	protected $table = 'applied_services';

	protected $casts = [
		'car_id' => 'int',
		'applied_by' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'car_id',
		'applied_by',
		'start_date',
		'end_date'
	];

	public function appliedBy(): BelongsTo
	{
		return $this->belongsTo(User::class, 'applied_by');
	}

	public function car(): BelongsTo
	{
		return $this->belongsTo(Car::class);
	}

	public function serviceDetails(): HasMany
	{
		return $this->hasMany(ServiceDetail::class);
	}

	public function serviceStatusHistories(): HasMany
	{
		return $this->hasMany(ServiceStatusHistory::class);
	}

	public function currentStatus(): HasOne
	{
		return $this->hasOne(ServiceStatusHistory::class)->latestOfMany();
	}

	public function usedProducts(): HasMany
	{
		return $this->hasMany(UsedProduct::class);
	}
}
