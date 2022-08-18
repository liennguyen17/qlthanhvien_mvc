<?php


    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = '';
    }

    switch($action){
        case 'add':{
            require_once('View/thanhvien/add_user.php');
            break;
        }

        case 'edit':{
            require_once('View/thanhvien/edit_user.php');
            break;
        }

        case 'delete':{
            require_once('View/thanhvien/delete_user.php');
            break;
        }

        default:{
            require_once('View/thanhvien/list.php');
            break;
        }
    }
?>