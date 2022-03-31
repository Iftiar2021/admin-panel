            
<?php 
  include('database/dbconfig.php');
  include('includes/header.php');
  include('includes/navbar.php');
?>
                 <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <div class="my-2 ml-5"> 
                        <h2><span class="text">Product Request Information</span></h2>
                      </div>
                      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
                  </div>
            <?php
                $query = "SELECT * FROM req_info";
                $query_run = mysqli_query($connection, $query);

            ?> 
             <div class="table-responsive">
                        <table class="table table-dark table-hover">
                            <thead class="table-active">
                                <th>Request ID</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Shipping Cost</th>
                                <th>Total Price</th>
                            </thead>
                        <tbody>
            <?php
                if (mysqli_num_rows($query_run) > 0) 
                {
                    while ($row = mysqli_fetch_assoc($query_run)) 
                    {
            ?>
                    <tr>
                              <td><?php echo $row["id"]; ?> </td>
                              <td><?php echo $row["name"]; ?> </td>
                              <td><?php echo $row["description"]; ?> </td>
                              <td><?php if(isset($row["image"])){ ?>
                                    <img style="width: 200px !important; height: 100px !important; object-fit:contain" src="<?php echo $row['image']?>" alt=""> <?php } ?></td>
                              <td><?php echo $row["product_price"]; ?> </td>
                              <td><?php echo $row["shipping_cost"]; ?> </td>
                              <td><?php echo $row["total_price"]; ?> </td>
                    </tr>
                <?php  
                    }
                }
                else{
                    echo "Sorry, No Record Found!";
                }
                ?>
                 </tbody>
              </table>
            </div>


<?php include('includes/scripts.php');
        include('includes/footer.php');
?>
