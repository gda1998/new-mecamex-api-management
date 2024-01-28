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
 * Class ServiceStatus
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ServiceStatusHistory[] $serviceStatusHistories
 *
 * @package App\Models
 */
class ServiceStatus extends Model
{
	use HasFactory;

	protected $table = 'service_statuses';

	protected $fillable = [
		'name'
	];

	public function serviceStatusHistories(): HasMany
	{
		return $this->hasMany(ServiceStatusHistory::class, 'status_id');
	}
}
