<?php
    $data["NIM"] = "2212562344";
    $data["NAMA"] = "BAYU";
    $data["JKEL"] = "L";
    $data["TGL"] = "2001-09-22";
    $data["HOBY"] = "MANCING";
    $data["ALAMAT"] = "BR.TRIBUANA";

    header("Content-type: application/json; charset: utf-g");
    echo json_encode($data);
