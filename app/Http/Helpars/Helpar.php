<?php

function getProductImage($src)
{
  if(!$src){
    return asset('frouts_placeholder.jpg');
  }
  return asset('storage/'.$src);
}
