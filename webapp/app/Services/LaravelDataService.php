<?php

namespace App\Services;

use Validator;
use App\Contracts\LaravelDataContract;

abstract class LaravelDataService implements LaravelDataContract
{

	protected $model;
	protected $rules;

	public function validate(array $data)
	{
		return Validator::make($data, $this->rules);
	}

	// Save a new record
	public function save($data)
	{
		$readyData = $this->recordBuilder($data);
		// Call to the corresponding Laravel Model. New entry using the create method.
		return $this->model->create($readyData);
	}

	//  Update a record
	public function update($id,$data)
	{
		$record = $this->model->find($id);
		$readyData = $this->recordBuilder($data);
		$record->update($readyData);
		return $record;
	}
}
?>