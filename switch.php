<?php

$profesi = "guru";
$profesi = "dokter";

switch($profesi){
    case "guru":
        echo " profesimu adalah seorang dokter";
    break;
    case "dokter":
        echo " profesimu adalah seorang guru";
        break;
    default:
    echo "profesi yang kamu pilih tidak tersedia";    
}