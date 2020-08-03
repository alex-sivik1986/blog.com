<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class ImageUpload extends Model {
	
	public $image;
	
	public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
			[['image'], 'required']
        ];
    }
	
	public function uploadFile(UploadedFile $file, $currentImage)
	{  
	    $this->image = $file;
	
    	if($this->validate()) {	
			$this->deleteImage($currentImage);
			
			$filename = strtolower(md5(uniqid($file->baseName)) .'.'. $file->extension);

			$file->saveAs($this->folderImage().$filename);
			
			return $filename;
		}	
		
	}
	
	private function folderImage()
	{   
	    $url = Yii::getAlias('@web').'uploads/';
		return 	$url;	
	}
	
	public function deleteImage($currentImage) 
	{  
		if(is_file($this->folderImage().$currentImage)) {
				unlink($this->folderImage().$currentImage);
		} else {
			return false;
		}
	}
	
}

?>