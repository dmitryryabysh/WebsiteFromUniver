<?php
include_once("database.php");

function get_image()
{
    global $link;
    $sql = "SELECT * FROM `paintbrush`";
    $result = mysqli_query($link, $sql);

    $paintbrush = mysqli_fetch_all($result, 1);
    return $paintbrush;



}





