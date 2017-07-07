<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class authentication extends Model
{
	// Custom table
        protected $table='authentication';
        protected $primarykey='id';
        protected $connection='sqlsrv';
}
