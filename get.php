<?php

if (isset($_GET['page'])){
    $page = $_GET['page'];
}
else {
    $page ='rien';
}
echo $page;

//$page = $_GET['page] ?? 'rien';
//echo $page;