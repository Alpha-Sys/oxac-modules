<?php

class oxac_volume_oxarticle extends oxac_volume_oxarticle_parent{

    public function getVolume(){
        $height = $this->oxarticles__oxheight->value;
        $length = $this->oxarticles__oxlength->value;
        $width = $this->oxarticles__oxwidth->value;

        return $height * $length * $width;
    }

}