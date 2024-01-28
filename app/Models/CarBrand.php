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
 * Class CarBrand
 * 
 * @property int $id
 * @property string $name
 * @property int $car_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CarType $carType
 * @property Collection|CarModel[] $carModels
 *
 * @package App\Models
 */
class CarBrand extends Model
{
	use HasFactory;

	protected $table = 'car_brands';

	protected $casts = [
		'car_type_id' => 'int'
	];

	protected $fillable = [
		'name',
		'car_type_id'
	];

	public function carType(): BelongsTo
	{
		return $this->belongsTo(CarType::class);
	}

	public function carModels(): HasMany
	{
		return $this->hasMany(CarModel::class);
	}
}
