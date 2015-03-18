#!/usr/bin/php
<?php

$i = 0;

while($i < 1000){
   $i++;
   echo "X";
   
   if($i % 100 == 0){
    echo "\n";
   }
}
?>