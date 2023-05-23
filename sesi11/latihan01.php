<?php
    $dta["NAMA"] = "Melli";
    $dta["TGL_LAHIR"] = "2006-05-16";
    $dta["JKEL"] = "P";
    $dta["ALAMAT"] = "Karangasem";
    $dta["NIM"] = "2201010311";
    $dta["EMAIL"] = "melli@gmail.com";
    

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);