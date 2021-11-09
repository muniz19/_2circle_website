<?php

if(!isset($_SESSION)) {
    session_start();
}

session_start();

header("location: login.php");