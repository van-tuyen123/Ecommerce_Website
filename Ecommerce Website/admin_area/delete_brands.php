<?php
if(isset($_GET['delete_brands'])){
    $delete_brand=$_GET['delete_brands'];
    $delete_query="DELETE FROM `brands` WHERE brand_id=$delete_brand";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('Xóa brand thành công')</script> ";
        echo "<script>window.open('./index.php?view_brands','_self')</script> ";
    }    
}
?>