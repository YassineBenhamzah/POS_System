<?php
require '../config/function.php';


$paraResultId = checkParamId('id');
if(is_numeric($paraResultId)){
    $customerId = validate($paraResultId);
    $customer = getById('customers' , $customerId);
    if($customer['status'] == 200){
        $customerDelete = delete('customers' , $customerId);
        if($customerDelete){
            redirect('customers.php' , 'customer deleted successfully'); 
        }else{
            redirect('customers.php' , 'Something went wrong');
        }
    }else{
        redirect('customers.php' , $customer['message']);
    }
    /* echo $adminId; */
}else{
    redirect('customers.php' , 'Something went wrong');
}
?>