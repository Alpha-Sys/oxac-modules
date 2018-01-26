<?php

namespace OxidAcademy\VoucherModule\Core;

class ViewConfig extends ViewConfig_parent{

    public function getShowVouchers(){
        $oBasket = $this->getSession()->getBasket();
        $dBrutto = $oBasket->getBruttoSum();

        $oConfig = $this->getConfig();
        $iSetting = $oConfig->getConfigParam('sOxacVoucherBasketValue');

        if($iSetting < $dBrutto){
            return true;
        }else{
            return false;
        }
    }
}