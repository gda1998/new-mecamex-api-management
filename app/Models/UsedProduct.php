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
 * Class UsedProduct
 * 
 * @property int $id
 * @property int $applied_service_id
 * @property int $product_id
 * @property int $quantity
 * @property float $price
 * @property Carbon $used_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AppliedService $appliedService
 * @property Product $product
 *
 * @package App\Models
 */
class UsedProduct extends Model
{
	use HasFactory;

	protected $table = 'used_products';

	protected $casts = [
		'applied_service_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int',
		'price' => 'float',
		'used_at' => 'datetime'
	];

	protected $fillable = [
		'applied_service_id',
		'product_id',
		'quantity',
		'price',
		'used_at'
	];

	public function appliedService(): BelongsTo
	{
		return $this->belongsTo(AppliedService::class);
	}

	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class);
	}
}
