<?php

class oxac_volume_oxviewconfig extends oxac_volume_oxviewconfig_parent{

    public function getShowVouchers(){
        //check parent
        if(parent::getShowVouchers()){
            $oUser = $this->getUser();
            if($oUser && $oUser->inGroup('oxidgoodcust')){
                return true;
            }
        }
    }
}