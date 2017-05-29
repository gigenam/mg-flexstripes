<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helpers.php';

JHTML::_('behavior.modal'); //Modal

$doc             = JFactory::getDocument();
$layout          = $params->get('layout', 'default');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

if($params->get('modo_dev')){
    $doc->addStyleSheet('modules/mod_mg-flexstripes/assets/css/mg-flexstripes.min.css');
}else{
    $doc->addStyleSheet('modules/mod_mg-flexstripes/assets/css/mg-flexstripes.css');
}

$imgList = mod_mgflexstripesHelper::getImg($params); //Buscar imagenes | Search for images

//Estilos configurables | Configurable styles
$styles = '.moduletable'.$moduleclass_sfx.' .mg-flexstripes__container { 
                height: '.$params->get('alto_container').';
                background-color: '.$params->get('color_container').';
                border: '.$params->get('border_container_width') ." ". $params->get('border_container_style') ." ". $params->get('border_container_color').';
                border-radius: '.$params->get('border_container_radius').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(1) {
                background-color: '.$params->get('color_img_1').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(2) {
                background-color: '.$params->get('color_img_2').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(3) {
                background-color: '.$params->get('color_img_3').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(4) {
                background-color: '.$params->get('color_img_4').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(5) {
                background-color: '.$params->get('color_img_5').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(6) {
                background-color: '.$params->get('color_img_6').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(7) {
                background-color: '.$params->get('color_img_7').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(8) {
                background-color: '.$params->get('color_img_8').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(9) {
                background-color: '.$params->get('color_img_9').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes:nth-of-type(10) {
                background-color: '.$params->get('color_img_10').';
            }
            .moduletable'.$moduleclass_sfx.' .mg-flexstripes__stripes img {
                right: '.$params->get('img_pos_x').';
                top: '.$params->get('img_pos_y').';
            }
';

$doc->addStyleDeclaration($styles);
require JModuleHelper::getLayoutPath('mod_mg-flexstripes', $layout);