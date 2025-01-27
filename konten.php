<?php
    if (!defined('INDEX')) header('location:login.php');

    $halaman = [
        "dashboard",
        "pegawai",
        "pegawai_tambah",
        "pegawai_insert",
        "pegawai_edit",
        "pegawai_update",
        "pegawai_hapus",
        "jabatan",
        "jabatan_tambah",
        "jabatan_insert",
        "jabatan_edit",
        "jabatan_update",
        "jabatan_hapus"
    ];

    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else {
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if($hal == $h) {
            include "content/$h.php";
            break;
        }
    }

?>