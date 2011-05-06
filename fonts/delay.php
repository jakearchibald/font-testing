<?php

include '../includes/lib.php';

$sleep = isset( $_GET['sleep'] ) ? $_GET['sleep'] : 0;
$no_cache = isset( $_GET['no-cache'] );

delay_font($_GET['f'], $sleep, $no_cache);