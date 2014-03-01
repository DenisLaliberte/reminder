<?php


    add_action('template_redirect',array($this,'redirect_programme_parents'));

  public function redirect_programme_parents(){
    $default_child = get_option("default_child_path");
    $request_uri = $_SERVER['REQUEST_URI'];
    if($this->is_parent_of($default_child,$request_uri)){
      wp_redirect( home_url( $default_child ) );
      exit();
    }
  }

  private function is_parent_of($child_path,$request_uri){
    $child_path_element = $this->get_path_element($child_path);
    $request_element = $this->get_path_element($request_uri);
    if($this->request_is_the_default($request_element,$child_path_element)){
      return false;
    }elseif($this->request_element_are_not_in_default($request_element,$child_path_element)){
      return false;
    }elseif($this->no_request_element_is_in_defaul($request_element,$child_path_element)){
      return false;
    }else{
      return true;
    }
  }

  private function get_path_element($path){
    $elements = explode("/",$path);
    $elements_without_empty_string =array_filter($elements);
    return $elements_without_empty_string;
  }

  private function request_is_the_default($request_element,$child_path_element){
    return ($child_path_element == $request_element);
  }
  private function request_element_are_not_in_default($request_element,$child_path_element){
    $difference = array_diff($request_element,$child_path_element);
    return count($difference)>0;
  } 
  private function no_request_element_is_in_defaul($request_element,$child_path_element){
    $intersect = array_intersect($request_element,$child_path_element);
    return count($intersect)==0;
  }
