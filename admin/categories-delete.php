<?php
require '../config/function.php';


$paraResultId = checkParamId('id');
if(is_numeric($paraResultId)){
    $categoryId = validate($paraResultId);
    $category = getById('categories' , $categoryId);
    if($category['status'] == 200){
        $categoryDelete = delete('categories' , $categoryId);
        if($categoryDelete){
            redirect('categories.php' , 'category deleted successfully'); 
        }else{
            redirect('categories.php' , 'Something went wrong');
        }
    }else{
        redirect('categories.php' , $category['message']);
    }
    /* echo $adminId; */
}else{
    redirect('categories.php' , 'Something went wrong');
}
?>