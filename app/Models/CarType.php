<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class CarType
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CarBrand[] $carBrands
 *
 * @package App\Models
 */
class CarType extends Model
{
	use HasFactory;

	protected $table = 'car_types';

	protected $fillable = [
		'name'
	];

	public function carBrands(): HasMany
	{
		return $this->hasMany(CarBrand::class);
	}
}
