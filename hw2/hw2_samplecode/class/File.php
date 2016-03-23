<?php 
class File{
    private $extension;
    private $originalFileName;
    private $size;
    private $tempDest;
    private $hashFileName;
    
    function __construct( $fileVar ){
        $this->originalFileName = $fileVar['name'];
        $this->extension = pathinfo( $fileVar['name'] , PATHINFO_EXTENSION );
        $this->size = $fileVar['size'];
        $this->tempDest = $fileVar['tmp_name'];
        $this->hashFileName = md5( $this->originalFileName . date("Y-m-d H:i:s") ) . "." . $this->extension;
    }

    public function regenerateHashName(){
        $this->hashFileName = md5( $this->originalFileName . date("Y-m-d H:i:s") ) . "." . $this->extension;
        return $this->hashFileName;
    }

    public function getOriginalName(){
        return $this->originalName;
    }

    public function getFileName(){
        return $this->fileName;
    }

    public function getSize(){
        return $this->size;
    }

    public function getTempDest(){
        return $this->tempDest;
    }

    public function getHashName(){
        return $this->hashFileName;
    }
}
