<?php
include "headfoot/header.php";
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Size</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

<!-- ---------------------- Lists of Brands of Size -------------------------------------------------- -->
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="size_add_process.php" method="Post">
                                    <div class="form-group">
                                            <label>Select Brand</label>
                                            <select class="form-control" name="selectbrand" required>
                                            <?php
                                            
                                            $sql = "SELECT * FROM brand where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['brandname'];?></option>
                                                <?php } ?>
                                                                                       
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Select Category Here -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                <div class="form-group">
                                            <label>Select Category</label>
                                            <select class="form-control" name="selectcategory" required>
                                            <?php
                                            
                                            $sql = "SELECT * FROM category where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['categoryname'];?></option>
                                            <?php } ?>                                                                              
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
<!-- --------------------------- Select Product Here -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                <div class="form-group">
                                            <label>Select Product</label>
                                            <select class="form-control" name="selectproduct" required>
                                            <?php
                                            
                                            $sql = "SELECT * FROM products where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['productname'];?></option>
                                            <?php } ?>                                                                              
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Size Add -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Size Add: </label>
                                            <input class="form-control" name="sizeitem" placeholder="Add Size of Item" required>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- -------------------------------- Status Checked -------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
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


                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
            </div>
            </div>


<?php
include "headfoot/footer.php";
?>