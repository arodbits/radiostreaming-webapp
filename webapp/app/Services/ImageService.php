<?php 
namespace App\Services;
use App\Services\LaravelFileUploader;

class ImageService{
	protected $fileUploader;

	public function __construct(LaravelFileUploader $fileUploader){
		$this->fileUploader = $fileUploader;
	}

	/**
	 * Main method for image validation - NO RETUNING ERROR MESSAGE YET
	 * @param  
	 * @return boolean
	 */
	public function isValid($file){
		$validImageMime = $this->isMimeTypeValid($file);
		$validImageSize = $this->isSizeValid($file);
		
		if($validImageMime && $validImageSize){
			return $file;
		}
	}

	public function process($file=null){

		if($file != null)
		{
			// If the image is valid...
			if($this->isValid($file))
			{
				// If the File upload successfully...
				if($this->fileUploader->upload($file, public_path().'/theme'))
				{ 
					return $file->getClientOriginalName();
				}
			}
		}
	}

	/*Check if the image is of a valid file size*/
	protected function isSizeValid($file, $validImageSize=null){
		$validImageSize==null ? $validImageSize = 500000 : $validImageSize; //Bytes
		$fileSize = $file->getClientSize();
		if ($fileSize <= $validImageSize && $fileSize > 0){
			return $fileSize;
		}
	}

	/*Check if the image is of a valid Mime Type*/
	protected function isMimeTypeValid($file, $validMimeTypes=array()){
		
		$validMimeTypes == null ? $fileMimeType = $file->getMimeType() : $validMimeTypes;
		$validMimeTypes = ['image/jpeg', 'image/png'];
		foreach($validMimeTypes as $mime){
			if ($fileMimeType==$mime){
				return $fileMimeType;
			}
		}
	}


}
?>