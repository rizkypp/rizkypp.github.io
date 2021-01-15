<?php
    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "antaran";

    $con = mysqli_connect($server, $user, $password, $database);
    if (mysqli_connect_errno()) {
        # code...
        echo "gagal terhubung mysql:".mysqli_connect_error();
    }

    $query = mysqli_query($con, "SELECT * FROM malang ORDER BY nama_kantor ASC");
    $json = '{"Kantor": [';

    while ($row = mysqli_fetch_array($query)) {
        # code...
        $char = '"';
        $json .=
        '{
            "id":"'.str_replace($char, '`',strip_tags($row['id'])).'",
            "nama_kantor":"'.str_replace($char, '`', strip_tags($row['nama_kantor'])).'",
            "latitude":"'.str_replace($char, '`', strip_tags($row['latitude'])).'",
            "longtitude":"'.str_replace($char, '`', strip_tags($row['longtitude'])).'"
        },';
    }
    $json = substr($json,0,strlen($json)-1);
    $json .= ']}';

    echo $json;
    mysqli_close($con);
?>

