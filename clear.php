<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('10.20.0.235', 6379); 
   echo "Connection to server sucessfully"; 
   //set the data in redis string 
   //$redis->set("tutorial-name", "Redis tutorial"); 
   $redis->flushAll();
   //$redis->delete($keys);
?>