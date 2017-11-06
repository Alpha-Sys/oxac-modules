<?php
class oxac_demo__oxwarticledetails extends oxac_demo__oxwarticledetails_parent
{
    /**
     * Template variable getter. Returns if price alarm is disabled
     *
     * @return object
     */
    public function isPriceAlarm()
    {
        $oProduct = $this->getProduct();
        $oPrice = $oProduct->getPrice();
        if($oPrice){
            $dPrice = $oPrice->getBruttoPrice();
            if($dPrice > oxRegistry::getConfig()->getShopConfVar('dPriceAlarmLimit')){
                return true;
            }else{
                return false;
            }
        }
    }
}