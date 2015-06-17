<?php 
namespace App\Services;
use App\Contracts\FileUploaderContract;

class LaravelFileUploader implements FileUploaderContract{

	// Upload a new file
	public function upload($file, $path = null)
	{
		$path == null ? $path = public_path() . '/uploads' :  $path;
		$filename= $file->getClientOriginalName();
		try{
			$newFile = $file->move($path, $filename);
		}catch(\Exception $e){
			
		}
		return $newFile;
	}

}

 ?>