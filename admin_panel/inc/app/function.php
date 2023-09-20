<?php
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