<?php

namespace App\Services;

use App\Contracts\FileUploaderContract;

class LaravelFileUploader implements FileUploaderContract
{
	protected $errors = array();

	// Upload a new file. Base directory: /public/
	public function upload($file, $path = null)
	{
		$path ?: $path = DIRECTORY_SEPARATOR . 'uploads';
		$absolutePath = public_path() . $path ;
		$filename= $file->getClientOriginalName();
		try
		{
			$file->move($absolutePath, $filename);
			return $path . DIRECTORY_SEPARATOR . $filename . PHP_EOL;
		}
		catch(\Exception $e)
		{
			$this->errors[] = $e->getMessage();
		}
	}

	public function errors()
	{
		return $this->errors;
	}
}
?>