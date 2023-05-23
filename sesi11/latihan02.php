<?php
    $dta[0]["NAMA"] = "Melli";
    $dta[0]["TGL_LAHIR"] = "2006-05-16";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ALAMAT"] = "Karangasem";
    $dta[0]["NIM"] = "2201010311";
    $dta[0]["EMAIL"] = "melli@gmail.com";
    
    $dta[1]["NAMA"] = "Made Jisung";
    $dta[1]["TGL_LAHIR"] = "2002-02-05";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ALAMAT"] = "Denpasar";
    $dta[1]["NIM"] = "2201010314";
    $dta[1]["EMAIL"] = "jisung@gmail.com";

    $dta[2]["NAMA"] = "Ningning";
    $dta[2]["TGL_LAHIR"] = "2004-06-24";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ALAMAT"] = "Buleleng";
    $dta[2]["NIM"] = "2201010316";
    $dta[2]["EMAIL"] = "ningning@gmail.com";

    $dta[3]["NAMA"] = "Karina";
    $dta[3]["TGL_LAHIR"] = "2003-05-19";
    $dta[3]["JKEL"] = "P";
    $dta[3]["ALAMAT"] = "Klungkung";
    $dta[3]["NIM"] = "2201010322";
    $dta[3]["EMAIL"] = "karina@gmail.com";

    $dta[4]["NAMA"] = "Winter";
    $dta[4]["TGL_LAHIR"] = "2002-02-27";
    $dta[4]["JKEL"] = "P";
    $dta[4]["ALAMAT"] = "Gianyar";
    $dta[4]["NIM"] = "2201010456";
    $dta[4]["EMAIL"] = "winter@gmail.com";

    $dta[5]["NAMA"] = "Giselle";
    $dta[5]["TGL_LAHIR"] = "2008-05-16";
    $dta[5]["JKEL"] = "P";
    $dta[5]["ALAMAT"] = "Tabanan";
    $dta[5]["NIM"] = "2201010318";
    $dta[5]["EMAIL"] = "giselle@gmail.com";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);