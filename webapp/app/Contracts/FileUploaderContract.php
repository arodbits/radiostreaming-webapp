<?php namespace App\Contracts;

interface FileUploaderContract{

	public function upload($file, $path = NULL);

}

?>