<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
	Protected $table = 'professores';
	protected $guarded = ['id'];
	public $timestamps = false;
}
