<?php
require '../config/function.php';


$paraResultId = checkParamId('id');
if(is_numeric($paraResultId)){
    $adminId = validate($paraResultId);
    $admin = getById('admins' , $adminId);
    if($admin['status'] == 200){
        $adminDelete = delete('admins' , $adminId);
        if($adminDelete){
            redirect('admins.php' , 'Admin deleted successfully'); 
        }else{
            redirect('admins.php' , 'Something went wrong');
        }
    }else{
        redirect('admins.php' , $admin['message']);
    }
    /* echo $adminId; */
}else{
    redirect('admins.php' , 'Something went wrong');
}
?>