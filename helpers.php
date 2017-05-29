<?php
defined('_JEXEC') or die;
class mod_mgflexstripesHelper {
    public static function getImg($params) {
        $bucle = array();
        $i = 1;
        while($i <= 10) :
        
        //Variables
        $imgUrl  = JURI::root().$params->get('img_'.$i);
        $imgAlt  = $params->get('img_'.$i.'_txtalt');
        $imgDesc = $params->get('img_'.$i.'_txtdesc');
        $imgLink = $params->get('custom_link_'.$i);

        if($params->get('custom_link_'.$i.'_dest') == 1) {
            $linkDest = _self;
        } else {
            $linkDest = _blank;
        }

        //Enlaces personalizados | Custom links
        if($params->get('links_popup') == 1) {
            
            //Si tiene enlaces y descripción | If has links and description
            if($params->get('img_'.$i) && $params->get('img_'.$i.'_txtdesc')) {
                $listitem = "<li class='mg-flexstripes__stripes'><a target='".$linkDest."' href='".$imgLink."'></a><img src='".$imgUrl."' alt='".$imgAlt."'><div class='mg-flexstripes__desc'><p>".$imgDesc."</p></div></li>";
                array_push($bucle, $listitem);

            //Si tiene enlaces pero no descripción | If has links but no description
            } else if($params->get('img_'.$i) && $params->get('img_'.$i.'_txtdesc') == null) {
                $listitem = "<li class='mg-flexstripes__stripes'><a target='".$linkDest."' href='".$imgLink."'></a><img src='".$imgUrl."' alt='".$imgAlt."'></li>";
                array_push($bucle, $listitem);
            }

        } else {

            //Si no tienen enlaces y si descripción | If has not links and has description
            if($params->get('img_'.$i) && $params->get('img_'.$i.'_txtdesc')) {
                $listitem = "<li class='mg-flexstripes__stripes'><a class='modal' href='".$imgUrl."'></a><img src='".$imgUrl."' alt='".$imgAlt."'><div class='mg-flexstripes__desc'><p>".$imgDesc."</p></div></li>";
                array_push($bucle, $listitem);

            //Si no tiene enlaces ni descripción | If has not links and description
            } else if($params->get('img_'.$i) && $params->get('img_'.$i.'_txtdesc') == null) {
                $listitem = "<li class='mg-flexstripes__stripes'><a class='modal' href='".$imgUrl."'></a><img src='".$imgUrl."' alt='".$imgAlt."'></li>";
                array_push($bucle, $listitem);
            }
        }

        $i++;
        endwhile;
        return $bucle;
    }
}