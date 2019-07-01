<?php
Kirby::plugin('klickmeister/gettype', [

]);


function cdaGetType( $data ){

  $type = gettype($data);

  if($type === "array"){
    return (array_keys($data) !== range(0, count($data) - 1)) ? "associative_array" : "array";
  }else{
    return $type;
  }
}