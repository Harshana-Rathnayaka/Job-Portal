<?php

$con = mysqli_connect('localhost', 'root', '', 'api-ipt-web');

if (!$con) {
    die('Please check your connection'.mysqli_error($con));
}
