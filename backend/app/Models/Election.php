<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Election
 * 
 * @property int $id
 * @property Carbon $date_election
 * @property string $label
 * @property string $description
 * @property string $statut
 * @property int $id_vote
 * 
 * @property Vote $vote
 *
 * @package App\Models
 */
class Election extends Model
{
	protected $table = 'election';
	public $timestamps = false;

	protected $casts = [
		'date_election' => 'datetime',
		'id_vote' => 'int'
	];

	protected $fillable = [
		'date_election',
		'label',
		'description',
		'statut',
		'id_vote'
	];

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_vote');
	}
}
