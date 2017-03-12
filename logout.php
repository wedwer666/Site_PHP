<?php
session_start();
$_SESSION['uuid'] = 0;
header('Location: ' . $_SERVER['HTTP_REFERER']);
