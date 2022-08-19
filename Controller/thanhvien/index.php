<?php

    include_once 'Model/DBConfig.php';

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = '';
    }

    $thanhcong = array();

    switch($action){
        case 'add':{
            if(isset($_POST['add_user'])){
                $hoten = $_POST['hoten'];
                $namsinh = $_POST['namsinh'];
                $quequan = $_POST['quequan'];

                if($db->InsertData($hoten, $namsinh, $quequan)){
                    $thanhcong[] = 'add_success';
                }
            }
            require_once('View/thanhvien/add_user.php');
            break;
        }

        case 'edit':{
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "thanhvien";
                $dataID = $db->getDataID($tblTable, $id);

                if(isset($_POST['update_user'])){

                    //lay du lieu tu view
                    $hoten = $_POST['hoten'];
                    $namsinh = $_POST['namsinh'];
                    $quequan = $_POST['quequan'];

                    //truyen du lieu tu view sang model
                    if($db->UpdateData($id, $hoten, $namsinh, $quequan)){
                        header('location:index.php?controller=thanhvien&action=list');
                    }

                }

            }
            require_once('View/thanhvien/edit_user.php');
            break;
        }

        case 'delete':{
            require_once('View/thanhvien/delete_user.php');
            break;
        }

        case 'list':{
            $tblTable = "thanhvien";
            $data = $db->getAllData($tblTable);
            require_once('View/thanhvien/list.php');
            break;
        }

        default:{
            require_once('View/thanhvien/list.php');
            break;
        }
    }
?>