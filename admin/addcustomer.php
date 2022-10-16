<?php
include "headfoot/header.php";


?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Customer Add Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

<!-- ----------------------Customer details -------------------------------------------------- -->
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="customer_add_process.php" method="Post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Your Full Name:</label>
                                            <input class="form-control" placeholder="Enter Full Name Here" name="customername" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" placeholder="Enter address" name="address" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input class="form-control" type="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Profile Photo</label>
                                            <input type="file"  name="customerpic">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input class="form-control" type="number" name="age" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number:</label>
                                            <input class="form-control" type="number" name="phone" required>
                                        </div>
                                       
                                    
                                        <div class="form-group"> 
                                            <label>Gender</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline1" value="male" required>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline2" value="female"required>Female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline3" value="others" required>Others
                                            </label>
                                        </div>

                                        <div class="form-group"> 
                                            <label>Status:</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline1" value="Active" required>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline2" value="Deactive"required>Deactive
                                            </label>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>




<?php
include "headfoot/footer.php";

?>
