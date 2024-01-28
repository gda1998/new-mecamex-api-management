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
 * Class Acquisition
 * 
 * @property int $id
 * @property Carbon $acquired_at
 * @property string $document
 * @property int $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $createdBy
 * @property Collection|AcquisitionDetail[] $acquisitionDetails
 *
 * @package App\Models
 */
class Acquisition extends Model
{
	use HasFactory;

	protected $table = 'acquisitions';

	protected $casts = [
		'acquired_at' => 'datetime',
		'created_by' => 'int'
	];

	protected $fillable = [
		'acquired_at',
		'document',
		'created_by'
	];

	public function createdBy(): BelongsTo
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function acquisitionDetails(): HasMany
	{
		return $this->hasMany(AcquisitionDetail::class);
	}
}
