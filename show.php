<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('10.20.0.235', 6379); 
   echo "Connection to server sucessfully"; 
   // Get the stored keys and print it 
   $arList = $redis->keys("*"); 
   echo "Stored keys in redis:: "; 
   print_r($arList); 
?>