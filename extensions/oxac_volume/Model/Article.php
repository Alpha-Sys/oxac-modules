<?php

namespace OxidAcademy\VolumeModule\Model;

class Article extends Article_parent{

    public function getVolume(){
        $dLength = $this->oxarticles__oxlength->value;
        $dWidth = $this->oxarticles__oxwidth->value;
        $dHeight = $this->oxarticles__oxheight->value;

        $dVolume = $dLength * $dWidth * $dHeight;

        return $dVolume;
    }
}