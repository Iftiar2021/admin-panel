
<?php 
    include('../database/dbconfig.php');
    include('includes/header.php'); 
    include('includes/navbar.php');
?> 

<?php

if (isset($_POST['add_item_btn'])) {
  
  
  $name = $_POST['name'];
  $unit_price = $_POST['unit_price'];
  $product_shipping_cost = $_POST['product_shipping_cost'];
  $our_shipping_cost = $_POST['our_shipping_cost'];
  $total_price = $_POST['total_price'];

if(isset($_FILES) & !empty($_FILES)){
            $img_name = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];
            $type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];

            $max_size = 10000000;
            $extension = substr($img_name, strpos($img_name, '.') + 1);

            if(isset($img_name) && !empty($img_name)){
                if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
                    $location = "../img/";
                    if(move_uploaded_file($tmp_name, $location.$img_name)){
                        //$smsg = "Uploaded Successfully";
                    $query= "INSERT INTO req_info(name,image,unit_price,product_shipping_cost,our_shipping_cost,total_price)VALUES('$name','$location$img_name','$unit_price','$product_shipping_cost','$our_shipping_cost','$total_price')";

                        $query_run = mysqli_query($connection, $query);
                        if($query_run){
                            //echo "Product Created";
                              $_SESSION['success'] = "Info Added Successfully!";
                        }else{
                            $_SESSION['status'] = "Info Not Added";
                        }
                    }else{
                         $_SESSION['status'] = "Failed to Upload File";
                    }
                }else{
                    $_SESSION['status'] = "Only JPG files are allowed and should be less that 1MB";
                }
            }else{
                $_SESSION['status'] = "Please Select a File";
            }
        }else{
    $query= "INSERT INTO req_info(name,unit_price,product_shipping_cost,our_shipping_cost,total_price)VALUES('$name','$unit_price','$product_shipping_cost','$our_shipping_cost','$total_price')";


        $query_run = mysqli_query($connection, $query);

if ($query_run) {
  $_SESSION['success'] = "Item Added into Menu Successfully!";
  
}

else{
  $_SESSION['status'] = "Item Not Added into Menu";
 
}
}
}

?>


  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Invoice</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
          
              <input type="datetime-local" id="datetime-local">
            </div>
        </div>
                   

         <div class="row  ">
         	<div class="col-lg-6">
           		<div class="card shadow mb-4">
<?php

    if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
        echo '<script> alert("Item Added Successfully!") </script>';
        unset($_SESSION['success']);
}

   if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
        echo '<script> alert("Item Not Added") </script>';
        unset($_SESSION['status']);
}
?>
                                
                    <div class="card-body">
                       <form action="" method="POST" enctype="multipart/form-data"> 
                             <div class="form-group" >
                                <label>Product Name</label>
                                <input class="form-control" name="name" type="text" />        
                                </div>        
                                <div class="form-group">
                                    <label>Select Product Image</label>
                                    <input class="form-control" type="file" name="image" id="image" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Product Price (Unit)</label>
                                    <input class="form-control" name="unit_price" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Product Shipping Cost</label>
                                    <input class="form-control" name="product_shipping_cost" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Our Shipping Cost</label>
                                    <input class="form-control" name="our_shipping_cost" type="text" />
                                </div>  
                                <div class="form-group">
                                    <label>Estimated Total </label>
                                    <input class="form-control" name="total_price" type="text" />
                                </div>

                                   <div class="my-2 ml-5 ">
                                    <button type="submit" name="add_item_btn" href="add_req_info.php" class="btn btn-primary">
                                        
                                        <span class="text">Save</span>
                                    </button>

                                    <button href="table.php" class="btn btn-danger ">
                                        
                                        <span class="text">Cancel</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php include('includes/scripts.php');
        include('includes/footer.php');
?>

