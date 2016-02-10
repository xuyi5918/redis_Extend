<?php
include './Redis.php';
$redisList = array(
    'master' => array('23.83.231.148',9302)
);
$Client=new redisClient($redisList);
var_dump($Client->select('master')->exec->delete(array("vale")));