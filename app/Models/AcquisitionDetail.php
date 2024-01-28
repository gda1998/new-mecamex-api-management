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
 * Class AcquisitionDetail
 * 
 * @property int $id
 * @property int $acquisition_id
 * @property int $product_id
 * @property int $quantity
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Acquisition $acquisition
 * @property Product $product
 *
 * @package App\Models
 */
class AcquisitionDetail extends Model
{
	use HasFactory;

	protected $table = 'acquisition_details';

	protected $casts = [
		'acquisition_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'acquisition_id',
		'product_id',
		'quantity',
		'price'
	];

	public function acquisition(): BelongsTo
	{
		return $this->belongsTo(Acquisition::class);
	}

	public function product(): BelongsTo
	{
		return $this->belongsTo(Product::class);
	}
}
