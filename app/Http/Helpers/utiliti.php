<?php 

      function getImage($src){
        if(!$src) return asset('frouts_plaseholder.png');
        return asset('storage/'.$src);
      }