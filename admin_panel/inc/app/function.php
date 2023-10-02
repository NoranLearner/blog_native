<?php

function getTitle(){

    global $title;

    if (isset($title)) {
        echo $title;
    } else {
        echo 'Default';
    }

}

function permission($role)
{
    global $connect;

    if ($role == 'admin') {
        $permission = 'Admin';
    } elseif ($role == 'editor') {
        $permission = 'Editor';
    } else {
        $permission = 'User';
    }

    return $permission;
}
?>