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

/**
 * Class Car
 * 
 * @property int $id
 * @property string $car_plate
 * @property int $car_serie_id
 * @property int $owner_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CarSeries $carSeries
 * @property User $owner
 * @property Collection|AppliedService[] $appliedServices
 *
 * @package App\Models
 */
class Car extends Model
{
	use HasFactory;

	protected $table = 'cars';

	protected $casts = [
		'car_serie_id' => 'int',
		'owner_id' => 'int'
	];

	protected $fillable = [
		'car_plate',
		'car_serie_id',
		'owner_id'
	];

	public function carSeries(): BelongsTo
	{
		return $this->belongsTo(CarSeries::class, 'car_serie_id');
	}

	public function owner(): BelongsTo
	{
		return $this->belongsTo(User::class, 'owner_id');
	}

	public function appliedServices(): HasMany
	{
		return $this->hasMany(AppliedService::class);
	}
}
