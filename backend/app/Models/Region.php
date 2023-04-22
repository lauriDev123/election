<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Facades\DB;

/**
 * Class Region
 *
 * @property int $id
 * @property string $label
 *
 * @property Collection|Participant[] $participants
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'regions';
	public $timestamps = false;

	protected $fillable = [
		'label'
	];

	public function participants()
	{
		return $this->hasMany(Participant::class, 'id_region');
	}
}
