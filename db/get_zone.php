<?php
    $a = "SELECT * FROM zone_chanel
        LEFT JOIN system_chanels ON zone_chanel.lock_id = system_chanels.id_lock
            LEFT JOIN users ON users.user_id = system_chanels.id_user WHERE zone='a'";
    $zone_a = mysqli_query($conn,$a);

    /* *********************** */

    $b = "SELECT * FROM zone_chanel
        LEFT JOIN system_chanels ON zone_chanel.lock_id = system_chanels.id_lock
            LEFT JOIN users ON users.user_id = system_chanels.id_user WHERE zone='b'";
    $zone_b = mysqli_query($conn,$b);

    /* ********************** */

    $c = "SELECT * FROM zone_chanel
        LEFT JOIN system_chanels ON zone_chanel.lock_id = system_chanels.id_lock
            LEFT JOIN users ON users.user_id = system_chanels.id_user WHERE zone='c'";
    $zone_c = mysqli_query($conn,$c);

    /* ********************** */

    $d = "SELECT * FROM zone_chanel
        LEFT JOIN system_chanels ON zone_chanel.lock_id = system_chanels.id_lock
            LEFT JOIN users ON users.user_id = system_chanels.id_user WHERE zone='d'";
    $zone_d = mysqli_query($conn,$d);

    /* ********************* */

    $e = "SELECT * FROM zone_chanel
        LEFT JOIN system_chanels ON zone_chanel.lock_id = system_chanels.id_lock
            LEFT JOIN users ON users.user_id = system_chanels.id_user WHERE zone='e'";
    $zone_e = mysqli_query($conn,$e);

    /* ******************* */

    $f = "SELECT * FROM zone_chanel LEFT JOIN system_chanels ON
           zone_chanel.lock_id = system_chanels.id_lock LEFT JOIN users ON 
            users.user_id = system_chanels.id_user WHERE zone='f'";
    $zone_f = mysqli_query($conn,$f);

    /* ******************* */
?>