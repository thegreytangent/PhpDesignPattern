<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
	protected $fillable = [
			'type' , 'name'
	];


    public function type()
    {
        return $this->type;
    }

}
