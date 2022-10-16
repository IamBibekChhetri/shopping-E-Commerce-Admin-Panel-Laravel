<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$sizesql = "SELECT * FROM size where id = '$id'";
$sizeresult = mysqli_query($conn,$sizesql);
$sizerow=mysqli_fetch_assoc($sizeresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Size</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<!-- ---------------------- Previous Brand details Or selecting Brand here-------------------------------------------------- -->
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_size.php?id=<?php echo $sizerow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Brand</label>
                                            <select class="form-control" name="editbrand">
                                            <?php
                                            
                                            $sql = "SELECT * FROM brand";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $sizerow['brandid']?'selected':''; ?>><?php echo $row['brandname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
<!-- ---------------------- Previous Category details Or selecting Category here-------------------------------------------------- -->
                    
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Select Category:</label>
                                            <select class="form-control" name="editcategory">
                                            <?php
                                            
                                            $sql = "SELECT * FROM category";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $sizerow['categoryid']?'selected':''; ?>><?php echo $row['categoryname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- ---------------------- Previous Product details Or selecting Product here-------------------------------------------------- -->
                    
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Select Products:</label>
                                            <select class="form-control" name="editproduct">
                                            <?php
                                            
                                            $sql = "SELECT * FROM products";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $sizerow['productid']?'selected':''; ?>><?php echo $row['productname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Size Edit -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <label>Edit Your Size</label>
                                            <input class="form-control" value="<?php echo $sizerow['size']; ?>" name="editsize" placeholder="">
                                        </div>
                                </div>
                            </div>
                        </div>
                    <br>


                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>


<?php
include "headfoot/footer.php";

?>