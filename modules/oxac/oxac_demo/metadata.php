<?php

$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'			=> 'oxac_demo',
    'title'			=> 'OXID Schulung',
    'description'	=> array(
        'en'		=>	'',
        'de'		=>	'',
    ),
    'thumbnail'		=> '',
    'version'		=> '1.0.0',
    'author'		=> 'Fabian Kunkler',
    'url'			=> 'http://www.oxid-esales.com',
    'email' 		=> 'fabian.kunkler@alpha-sys.de',
    'extend'		=> array(
        'oxwarticledetails' => 'oxac/oxac_demo/components/widgets/oxac_demo__oxwarticledetails',
    ),
    'files' => array(
        'oxac_adminsample_main'		=>	'oxac/oxac_demo/controllers/admin/oxac_adminsample_main.php',
    ),
    'templates' => array(
        'oxac_adminsample_main.tpl'	=>	'oxac/oxac_demo/views/admin/tpl/oxac_adminsample_main.tpl'
    ),
    'blocks'		=>	array(
        /*array(
            'template'	=> 'page/details/inc/productmain.tpl',
            'block'		=> 'details_productmain_shortdesc',
            'file'		=> 'views/blocks/details_productmain_shortdesc.tpl'
        )*/
    ),
    'settings'      => array(
        array('group' => 'mygroup', 'name' => 'dPriceAlarmLimit', 'type' => 'str',  'value' => '30'),
    )
);
