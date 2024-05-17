<?php
require '../config/function.php';


$paraResultId = checkParamId('id');
if(is_numeric($paraResultId)){
    $productId = validate($paraResultId);
    $product = getById('products' , $productId);
    if($product['status'] == 200){
        $productDelete = delete('products' , $productId);
        if($productDelete){
            $deleteImage = "../".$product['data']['image'];
            if(file_exists($deleteImage)){
                unlink($deleteImage);
            }
            redirect('products.php' , 'product deleted successfully'); 
        }else{
            redirect('products.php' , 'Something went wrong');
        }
    }else{
        redirect('products.php' , $product['message']);
    }
    /* echo $adminId; */
}else{
    redirect('products.php' , 'Something went wrong');
}
?>