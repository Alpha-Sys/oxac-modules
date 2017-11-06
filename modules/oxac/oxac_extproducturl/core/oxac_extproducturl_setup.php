<?php
class oxac_extproducturl_setup
{
    
    
    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
    	self::addFields();
    	self::_rebuildViews();
    }
    
    
    
    /**
     * Execute action on deactivate event
     */
    public static function onDeactivate()
    {
    	self::removeFields();
    	self::_rebuildViews();
    }
    
    
    
    /**
     * Add database fields
     */
    public static function addFields()
    {
    	$sSql = "ALTER TABLE  `oxarticles` ADD  `OXAC_EXTPRODUCTURLLABEL` VARCHAR( 255 ) NOT NULL;";    
    	oxDb::getDb()->execute($sSql);

    	// imply multilang field creation. OXID will automatically create all the required fields.
    	$sSql = "ALTER TABLE  `oxarticles` ADD  `OXAC_EXTPRODUCTURLLABEL_1` VARCHAR( 255 ) NOT NULL;";
    	oxDb::getDb()->execute($sSql);
    	
    	$sSql = "ALTER TABLE  `oxarticles` ADD  `OXAC_EXTPRODUCTURL` VARCHAR( 255 ) NOT NULL;";
    	oxDb::getDb()->execute($sSql);
    }
    
    
    
    /**
     * Remove database fields
     */
    public static function removeFields()
    {
    	$sSql = "ALTER TABLE `oxarticles` DROP `OXAC_EXTPRODUCTURL`, DROP `OXAC_EXTPRODUCTURLLABEL`;";
    	oxDb::getDb()->execute($sSql);
    }
    
    
    
    /**
     * Rebuild Views (see also: "devguide")
     *
     * @param null
     * @return null
     */
    private static function _rebuildViews()
    {
    	if (oxRegistry::getSession()->getVariable('malladmin')){
    		$oMetaData = oxNew('oxDbMetaDataHandler');
    		$oMetaData->updateViews();
    	}
    }
    
}