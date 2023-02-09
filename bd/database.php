<?php

$link=mysqli_connect('localhost','root','','сайттен');
if(mysqli_connect_errno()){
    echo 'fail in load ('.mysqli_connect_error().'):' .mysqli_connect_error();
    exit();

}


