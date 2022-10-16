<?php
include "headfoot/header.php";
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Price Of Item</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

<!-- ---------------------- Lists of Brands of Products -------------------------------------------------- -->
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="price_add_process.php" method="Post">
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

<!-- --------------------------- Product Select -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Select Products</label>
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

                
<!-- --------------------------- Size  Select -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Select Size</label>
                                    <select class="form-control" name="selectsize" required>
                                    <?php
                                            
                                            $sql = "SELECT * FROM size where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['size'];?></option>
                                            <?php } ?>                                                                                     
                                    </select>
                                </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Order Select -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Select Order</label>
                                    <select class="form-control" name="selectorder" required>
                                    <?php
                                            
                                            $sql = "SELECT * FROM order_table where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>"><?php echo $row['ordername'];?></option>
                                            <?php } ?>                                                                                     
                                    </select>
                                </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- --------------------------- Price Add -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                   
                </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Price:</label>
                                            <input class="form-control" name="price" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- -------------------------------- Status Checked -------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                <div class="panel-heading">
                           2 .  &nbsp;   Status Check 
                        </div>
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