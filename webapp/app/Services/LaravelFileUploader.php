<?php 
namespace App\Services;
use App\Contracts\FileUploaderContract;

class LaravelFileUploader implements FileUploaderContract{

	// Upload a new file
	public function upload($file, $path = NULL)
	{
		$path == null ? $path = public_path() . '/uploads' :  $path;
		$filename= $file->getClientOriginalName();
		$newFile = $file->move($path, $filename);
		return $newFile;
	}

}

 ?>