<?php

include '../includes/lib.php';

$sleep = isset( $_GET['sleep'] ) ? $_GET['sleep'] : 0.1;
$chunk_size = isset( $_GET['chunk_size'] ) ? $_GET['chunk_size'] : 500;

throttle_font($_GET['f'], $sleep, $chunk_size);