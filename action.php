<?php

require_once 'vendor/autoload.php';
use App\classes\FullName;

$fullName = new FullName($_POST);
$res = $fullName->index();
include 'index.php';