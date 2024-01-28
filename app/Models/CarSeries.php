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
 * Class CarSeries
 * 
 * @property int $id
 * @property string|null $name
 * @property int $year
 * @property int $car_model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CarModel $carModel
 * @property Collection|Car[] $cars
 *
 * @package App\Models
 */
class CarSeries extends Model
{
	use HasFactory;

	protected $table = 'car_series';

	protected $casts = [
		'year' => 'int',
		'car_model_id' => 'int'
	];

	protected $fillable = [
		'name',
		'year',
		'car_model_id'
	];

	public function carModel(): BelongsTo
	{
		return $this->belongsTo(CarModel::class);
	}

	public function cars(): HasMany
	{
		return $this->hasMany(Car::class, 'car_serie_id');
	}
}
