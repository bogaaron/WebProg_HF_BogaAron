<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function my_autoloader($oszt) {
    $file = $oszt . '.php';
    if(file_exists($file)) {
        include $file;
    }
}

spl_autoload_register('my_autoloader');


