<?php

require_once './model/DB.php';
require_once './model/RoleDB.php';
require_once './model/UserDB.php';
require_once './model/UserRoleDB.php';
require_once 'menu.php';


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'adduser':
            require_once './view/user/add.php';
            break;
        case 'listeusers':
            $liste = listeUsers();
            require_once './view/user/liste.php';
            break;
        case 'addrole':
            require_once './view/role/add.php';
            break;
        case 'listeroles':
            $liste = listeRoles();
            require_once './view/role/liste.php';
            break;
        case 'adduserole':
            $roles = listeRoles();
            require_once './view/user_roles/add.php';
            break;
        case 'revokeuser':
            require_once './controller/CUserRole.php';
            break;

        default:
            header('location:index.php');
            break;
    }
} else {
    require_once './menu.php';
}
?>