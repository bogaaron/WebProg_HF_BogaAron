<?php
     
     $url = 'https://fakestoreapi.com/carts/user/5';
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_HTTPGET, true);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $j_res = curl_exec($ch);
     curl_close($ch);
     $carts = json_decode($j_res);
         echo "Kosarak szama: $egy->id ossz: $all <br>";
