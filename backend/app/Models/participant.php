<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 * 
 * @property int $id
 * @property string $nom
 * @property string $num_cni
 * @property int $age
 * @property string $sexe
 * @property string $status
 * @property string $login
 * @property string $pwd
 * @property string $email
 * @property string $etat
 * @property string|null $telephone
 * @property int $id_region
 * @property int $id_vote
 * 
 * @property Region $region
 * @property Vote $vote
 *
 * @package App\Models
 */
class Participant extends Model
{
	protected $table = 'participant';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int',
		'id_region' => 'int',
		'id_vote' => 'int'
	];

	protected $fillable = [
		'nom',
		'num_cni',
		'age',
		'sexe',
		'status',
		'login',
		'pwd',
		'email',
		'etat',
		'telephone',
		'id_region',
		'id_vote'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'id_region');
	}

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_vote');
	}
}
