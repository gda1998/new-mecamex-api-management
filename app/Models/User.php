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
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $second_lastname
 * @property string $email
 * @property string $phone
 * @property int $role_id
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property Collection|Acquisition[] $acquisitions
 * @property Collection|AppliedService[] $appliedServices
 * @property Collection|Car[] $cars
 *
 * @package App\Models
 */
class User extends Model
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'users';

	/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
	protected $casts = [
		'role_id' => 'int',
		'email_verified_at' => 'datetime'
	];

	/**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
	protected $hidden = [
		'password',
		'remember_token'
	];

	/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
	protected $fillable = [
		'name',
		'lastname',
		'second_lastname',
		'email',
		'phone',
		'role_id',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function role(): BelongsTo
	{
		return $this->belongsTo(Role::class);
	}

	public function acquisitions(): HasMany
	{
		return $this->hasMany(Acquisition::class, 'created_by');
	}

	public function appliedServices(): HasMany
	{
		return $this->hasMany(AppliedService::class, 'applied_by');
	}

	public function cars(): HasMany
	{
		return $this->hasMany(Car::class, 'owner_id');
	}
}
