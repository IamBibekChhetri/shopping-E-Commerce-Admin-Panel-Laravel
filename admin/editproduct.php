<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$productsql = "SELECT * FROM products where id = '$id'";
$productresult = mysqli_query($conn,$productsql);
$productrow=mysqli_fetch_assoc($productresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Product</h1>
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
                                    <form role="form" action="update_product.php?id=<?php echo $productrow['id']; ?>" method = "Post" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <label>Select Brand</label>
                                            <select class="form-control" name="editbrand">
                                            <?php
                                            
                                            $sql = "SELECT * FROM brand";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $productrow['brand_id']?'selected':''; ?>><?php echo $row['brandname'];?></option>
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
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $productrow['category_id']?'selected':''; ?>><?php echo $row['categoryname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Products Edit -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <label>Edit Your Product</label>
                                            <input class="form-control" value="<?php echo $productrow['productname']; ?>" name="editproduct">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file"  value="<?php echo $productrow['productpic']; ?>" name="productpic">
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