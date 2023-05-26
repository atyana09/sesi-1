<?php
    $data[0]["NIM"] = "2212562344";
    $data[0]["NAMA"] = "BAYU";
    $data[0]["JKEL"] = "L";
    $data[0]["TGL"] = "2001-09-22";
    $data[0]["HOBY"] = "MANCING";
    $data[0]["ALAMAT"] = "BR.TRIBUANA";

    $data[1]["NIM"] = "22101010101";
    $data[1]["NAMA"] = "AYU";
    $data[1]["JKEL"] = "P";
    $data[1]["TGL"] = "2001-09-21";
    $data[1]["HOBY"] = "MASAK";
    $data[1]["ALAMAT"] = "BR.TRIBUANA";

    $data[2]["NIM"] = "22030303030";
    $data[2]["NAMA"] = "ERINA";
    $data[2]["JKEL"] = "P";
    $data[2]["TGL"] = "2004-04-21";
    $data[2]["HOBY"] = "MASAK";
    $data[2]["ALAMAT"] = "AIRMERAH";

    $data[3]["NIM"] = "2210404040";
    $data[3]["NAMA"] = "ALFIYAN";
    $data[3]["JKEL"] = "L";
    $data[3]["TGL"] = "2001-08-21";
    $data[3]["HOBY"] = "BOLA";
    $data[3]["ALAMAT"] = "BR.TRIBUANA";

    $data[4]["NIM"] = "22050505050";
    $data[4]["NAMA"] = "MILA";
    $data[4]["JKEL"] = "P";
    $data[4]["TGL"] = "2004-09-16";
    $data[4]["HOBY"] = "MASAK";
    $data[4]["ALAMAT"] = "BR.KERETEG";

    $data[5]["NIM"] = "220606060606";
    $data[5]["NAMA"] = "ARIF";
    $data[5]["JKEL"] = "L";
    $data[5]["TGL"] = "2003-09-9";
    $data[5]["HOBY"] = "OTOMOTIF";
    $data[5]["ALAMAT"] = "BOGATAMA";


    header("Content-type: application/json; charset: utf-g");
    echo json_encode($data);
