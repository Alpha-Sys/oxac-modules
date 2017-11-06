<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oxac_volume',
    'title'        => 'OXID Academy Volumenberechnung',
    'description'  => 'Volumenberechnung',
    'thumbnail'    => 'logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'OXID eSales AG',
    'url'          => 'http://www.oxid-esales.com',
    'email'        => 'info@oxid-esales.com',
    'extend'       => array(
        'oxarticle'     => "oxac/oxac_volume/models/oxac_volume_oxarticle",
        'oxviewconfig'     => "oxac/oxac_volume/core/oxac_volume_oxviewconfig",
    ),
    'files' => array(
    ),
    'events'       => array(
        //'onActivate'   => 'oePayPalEvents::onActivate',
        //'onDeactivate' => 'oePayPalEvents::onDeactivate'
    ),
    'templates' => array(
    ),
    'blocks' => array(
        array('template' => 'page/details/inc/productmain.tpl',
            'block'=>'details_productmain_artnumber',
            'file'=>'/views/blocks/details_productmain_artnumber.tpl'
        ),
    ),
    'settings' => array(

    )
);
