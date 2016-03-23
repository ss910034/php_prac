<?php 
class FileUploader{

    static function upload( $fileInstance , $destination ){
        if( move_uploaded_file( $fileInstance->getTempDest() , $destination ) ){
            return "/assets/image/" . $fileInstance->getHashName();
        }
        else{
            throw new Exception("Move upload file failed", 1);
        }
        
    }

}
