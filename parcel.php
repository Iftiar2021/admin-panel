<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Parcel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include('includes/navbar.php');
?>


  <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Parcel Entry</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
                    </div>

         <div class="row  ">
         	<div class="col-lg-6">
           		<div class="card shadow mb-4">
                                
                    <div class="card-body">
                             <div class="form-group">
                                    <label>Select Marchant</label>
                                            <select class="form-control">
                                                <option>Gents Cart</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Invoice</label>
                                            <input class="form-control" type="text" />
                                        </div>
                              <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Alt Mobile</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Charge</label>
                                            <input class="form-control" type="text" />
                                        </div>
                    <div class="form-group">
                                    <label>Select Zone</label>
                                            <select class="form-control">
                                                <option>Khilgaon</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                        <div class="form-group">
                                    <label>Select Type</label>
                                            <select class="form-control">
                                                <option>Same Day</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                    <label>Status</label>
                                            <select class="form-control">
                                                <option>Gents Cart</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" />
                                        </div>
                                         <div class="form-group">
                                            <label>Notes</label>
                                            <input class="form-control" type="text" />
                                        </div>

                                   <div class="my-2 ml-5 ">
                                    <a href="parcel.php" class="btn btn-primary">
                                        
                                        <span class="text">Save</span>
                                    </a>

                                  
                                    <a href="parcel.php" class="btn btn-danger ">
                                        
                                        <span class="text">Cancel</span>
                                    </a>
                                </div>
                  
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


















<?php include('includes/scripts.php');
        include('includes/footer.php');
?>