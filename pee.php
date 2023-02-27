<?php
  
function pee(){
	global $location, $needs_to_pee;
  if($location === "woods" || $location === "bathroom"){
    echo "You relieve yourself.\n";
    $needs_to_pee = FALSE;
  }else{
    echo "Are you crazy? You can't pee here!\n";
  }
}