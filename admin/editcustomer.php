<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$customersql = "SELECT * FROM customer where id = '$id'";
$customerresult = mysqli_query($conn,$customersql);
$customerrow=mysqli_fetch_assoc($customerresult);
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Customer Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">

<!-- ----------------------Customer details Edit -------------------------------------------------- -->
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_customer.php?id=<?php echo $customerrow['id']; ?>" method = "Post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Customers Full Name:</label>
                                            <input class="form-control"  value="<?php echo $customerrow['customername']; ?>" name="customername" placeholder="Edit Customer Name"  required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" value="<?php echo $customerrow['address']; ?>" placeholder="Enter address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" value="<?php echo $customerrow['email']; ?>" placeholder="Enter address" name="email" type="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Customer Picture</label>
                                            <input type="file"  value="<?php echo $customerrow['customerpic']; ?>" name="customerpic">
                                        </div>                        
                                        <div class="form-group">
                                            <label>Customer Age:</label>
                                            <input class="form-control" value="<?php echo $customerrow['age']; ?>" name="age" type="number" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Customer Phone:</label>
                                            <input class="form-control" value="<?php echo $customerrow['phone']; ?>" name="phone" type="number" placeholder="" required>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <label class="radio-inline">
                                                <input type="radio" value="male" name="gender"  id="optionsRadiosInline1">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="female" name="gender"  id="optionsRadiosInline2">Female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="others" name="gender"  id="optionsRadiosInline3">Others
                                            </label>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>




<?php
include "headfoot/footer.php";

?>