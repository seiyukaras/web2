<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';

    protected $casts = [
    	'dia_format' => 'date:d/m/Y',
    	'hora_format' => 'time:H:i',
	];

	public function getDiaFormat()
	{
    	return \Carbon\Carbon::parse($this->dia)->format('d/m/Y');
	}

	public function getHoraFormat()
	{
    	return \Carbon\Carbon::parse($this->hora)->format('H:i');
	}
}
