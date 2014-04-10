<?php 

$fixture_true = array(
  0=> array('children'=>array('active'=>true),1234,4321,2345),
  1=> array('children'=>array('active'=>false),1234,4321,2345),
);
$fixture_false = array(
  0=> array('children'=>array('active'=>false),1234,4321,2345),
  1=> array('children'=>array('active'=>false),1234,4321,2345),
);

function _children_is_active($variables){
  $filtred = array_filter ($variables,'_menu_is_active');
  return !empty($filtred);
}

function _menu_is_active($menu){
  $research_result = in_array(array('active'=>true),$menu);  
  return $research_result;
}

$return = _children_is_active($fixture_true);
var_dump($return);
$return = _children_is_active($fixture_false);
var_dump($return);
