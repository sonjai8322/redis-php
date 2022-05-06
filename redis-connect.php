<?php
try {
    // Create a Redis Instance
    $redis = new \Redis();
    
    // Try to connect to a redis server
    // In this case within the host machine and the default port of redis
    //$redis->connect('10.20.0.235', 6379);
    // Define some Key
    //$redis->set('user', 'sdkcarlos');
    // Obtain value
    //$user = $redis->get('user');

    //Connecting to Redis
   // $redis->connect('172.29.23.51', 6379);
    //ฝฝ$redis->auth('redis_admin1_');
     
    $redis = new Redis();
    //Connecting to Redis
    //$redis->connect('172.29.23.51', 6379);
    //172.29.23.52
    $redis->connect('172.29.23.52', 6379);
    $redis->auth('iS-redis_admin1_');
     
    if ($redis->ping()) {
     echo "PONGn";
    }

    // Should Output: sdkcarlos
    //print($user);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>