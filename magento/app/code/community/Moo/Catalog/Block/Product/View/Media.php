<?php

/**
 * Moo Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Moo
 * @package    Moo_Catalog
 * @author     Mohamed Alsharaf <mohamed.alsharaf@gmail.com>
 * @copyright  Copyright (c) 2010 Mohamed Alsharaf. (http://jamandcheese-on-phptoast.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Moo_Catalog_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{

    public function renderCloudOptions()
    {
        $output = "";
        $width = $this->getCloudConfig('zoomImage/zoomWidth');
        if (empty($width) || !is_numeric($width)) {
            $width = 'auto';
        }
        $height = $this->getCloudConfig('zoomImage/zoomHeight');
        if (empty($height) || !is_numeric($height)) {
            $height = 'auto';
        }
        $output .= "zoomWidth: '" . $width . "',";
        $output .= "zoomHeight: '" . $height . "',";
        $output .= "position: '" . $this->getCloudConfig('zoomImage/position') . "',";
        $output .= "smoothMove: " . (int) $this->getCloudConfig('zoomImage/smoothMove') . ",";
        $output .= "showTitle: " . ($this->getCloudConfig('zoomImage/showTitle') ? 'true' : 'false') . ",";
        $output .= "titleOpacity: " . (fla   $wire License (;          d}sr $this->g-}       $wide/,|     ,        ut .=dConfig('zoomIb:+;ttleity: " . (flab-sptoast.com)
 * @;000000 Confi) ? '
}.                                                  Ge/positi                                                                                                                                                         ouptions()
    {
                 1o)tleOt,  ty($width) || !is_numeric(ooo_inal 'false'n    $width = 'aut!o';
   e'n )                            e'n h . "',";
        $output .= "ooo_inal 'false'n   ight . "',";
    }
                    e'n                                              ooo_inal 'false'n )
    {
                  $output .= "smootndcFocus . (int) $this->getCloudConfigooo_inal 'falstndcFocusove') . ",";
        $outp      1o)tlereturntput .=       }
class Moo_Catalog_Blo->getCloudConfi$nhoria extends Mage_returnthp  ::->gStoreudConfigtio_ctClob:+;/'"',"nhori      }
class Moo_Catalog_Blo->getClo 'fal($pcense , $i'falFubj=nullia extends Mage_     i'falFubj !== nulli                i'falFubj =  i'falFubjis->gFubj()"',";
    }
         i'falty($width)helper('c       i'fal')->i   ($pcense , 'i'fal', $i'falFubj)     1o)tleOy=ty           {

    publudConfig('zoomImage/zoomWidth');
   1o)tleOy=ty     pty($width) || !isdth) || !is_numeric(o render&& !eric($width)) llia extends Magcusove')     ->resize(o rend,ludConfi         i'f egoo!is_numeric(o rendellia extends Magcusove')     ->resize(o rend         i'f egoo!is_numeric(oidth)) llia extends Magcusove')     ->resize(odConfi         i'f
ends Magcusove')     :->gStor}
               ustar                                                                                                                