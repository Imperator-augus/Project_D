<?php

include_once "db.php";

function ins_user(&$param)
{
    $uid = $param['uid'];
    $upw = $param['upw'];
    $nm = $param['nm'];
    $birth = $param['birth'];
    $gender = $param['gender'];

    $conn = get_conn();
    $sql = "INSERT INTO t_user(uid, upw, nm, birth, gender)
            VALUES('$uid', '$upw', '$nm', '$birth', $gender)";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_user(&$param)
{
    $uid = $param['uid'];

    $conn = get_conn();
    $sql = "SELECT user_no, uid, upw, nm, birth, gender, profile_img FROM t_user
            WHERE uid = '$uid'";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}