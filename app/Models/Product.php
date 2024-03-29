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
 * Class Product
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property float $current_price
 * @property int $stock
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|AcquisitionDetail[] $acquisitionDetails
 * @property Collection|UsedProduct[] $usedProducts
 *
 * @package App\Models
 */
class Product extends Model
{
	use HasFactory, SoftDeletes;

	protected $table = 'products';

	protected $casts = [
		'current_price' => 'float',
		'stock' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'current_price',
		'stock',
		'image'
	];

	public function acquisitionDetails(): HasMany
	{
		return $this->hasMany(AcquisitionDetail::class);
	}

	public function usedProducts(): HasMany
	{
		return $this->hasMany(UsedProduct::class);
	}
}
