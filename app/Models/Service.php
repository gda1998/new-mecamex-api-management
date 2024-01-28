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
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property float $current_cost
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|ServiceDetail[] $serviceDetails
 *
 * @package App\Models
 */
class Service extends Model
{
	use HasFactory, SoftDeletes;

	protected $table = 'services';

	protected $casts = [
		'current_cost' => 'float'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'current_cost'
	];

	public function serviceDetails(): HasMany
	{
		return $this->hasMany(ServiceDetail::class);
	}
}
