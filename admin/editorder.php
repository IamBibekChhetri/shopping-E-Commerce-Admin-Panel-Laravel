<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$ordersql = "SELECT * FROM order_table where id = '$id'";
$orderresult = mysqli_query($conn,$ordersql);
$orderrow=mysqli_fetch_assoc($orderresult);
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
                                    <form role="form" action="update_order.php?id=<?php echo $orderrow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Brand</label>
                                            <select class="form-control" name="editbrand">
                                            <?php
                                            
                                            $sql = "SELECT * FROM brand";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $orderrow['brandid']?'selected':''; ?>><?php echo $row['brandname'];?></option>
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
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $orderrow['categoryid']?'selected':''; ?>><?php echo $row['categoryname'];?></option>
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
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $orderrow['productid']?'selected':''; ?>><?php echo $row['productname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Order Edit -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <label>Edit Your Order</label>
                                            <input class="form-control" value="<?php echo $orderrow['ordername']; ?>" name="editorder" placeholder="">
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