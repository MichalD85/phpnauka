<?php

function uniqid()
{
    $value = 1;
    if (!isSet($_COOKIE["cookiejeden"])) {
    $licznik = 1;}
    else
    {
    $licznik=intval($_COOKIE["cookiejeden"]);
    $licznik++;
    }
    return $licznik;
}

file_get_contents(visit.log);

echo $licznik;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

