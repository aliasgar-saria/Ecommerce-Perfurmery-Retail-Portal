<?php

session_start();

$connect=pg_connect("host=127.0.0.1 dbname=perfume port=5432 user=postgres password=car") or die(" unable to connect");
?>
