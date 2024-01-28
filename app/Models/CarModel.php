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
 * Class CarModel
 * 
 * @property int $id
 * @property string $name
 * @property int $car_brand_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CarBrand $carBrand
 * @property Collection|CarSeries[] $carSeries
 *
 * @package App\Models
 */
class CarModel extends Model
{
	use HasFactory;

	protected $table = 'car_models';

	protected $casts = [
		'car_brand_id' => 'int'
	];

	protected $fillable = [
		'name',
		'car_brand_id'
	];

	public function carBrand(): BelongsTo
	{
		return $this->belongsTo(CarBrand::class);
	}

	public function carSeries(): HasMany
	{
		return $this->hasMany(CarSeries::class);
	}
}
