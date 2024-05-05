

<?php


if(isset($_POST['submit'])){

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_POST['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'] ;
    $image_name = $_FILES['Pimage']['name'] ;
        $img_des = "/public/Uploadimage".$image_name;
    move_uploaded_file($image_loc,"/public/Uploadimage".$image_name);
}
?>