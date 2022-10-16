<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$pricesql = "SELECT * FROM price where id = '$id'";
$priceresult = mysqli_query($conn,$pricesql);
$pricerow=mysqli_fetch_assoc($priceresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Price</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<!-- ---------------------- Previous Brand details Or selecting Brand here-------------------------------------------------- -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_price.php?id=<?php echo $pricerow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Brand</label>
                                            <select class="form-control" name="editbrand">
                                            <?php
                                            
                                            $sql = "SELECT * FROM brand";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $pricerow['brandid']?'selected':''; ?>><?php echo $row['brandname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                
<!-- ---------------------- Previous Category details Or selecting Category here-------------------------------------------------- -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
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
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $pricerow['categoryid']?'selected':''; ?>><?php echo $row['categoryname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    


<!-- ---------------------- Previous Product details Or selecting Product here-------------------------------------------------- -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
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
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $pricerow['productid']?'selected':''; ?>><?php echo $row['productname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                
<!-- ---------------------- Previous Size details Or selecting Size here-------------------------------------------------- -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Select Size:</label>
                                            <select class="form-control" name="editsize">
                                            <?php
                                            
                                            $sql = "SELECT * FROM size";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $pricerow['sizeid']?'selected':''; ?>><?php echo $row['size'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
<!-- ---------------------- Previous Order details Or selecting Order here-------------------------------------------------- -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
                                    <div class="form-group">
                                            <label>Select Order:</label>
                                            <select class="form-control" name="editorder">
                                            <?php
                                            
                                            $sql = "SELECT * FROM order_table";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $pricerow['orderid']?'selected':''; ?>><?php echo $row['ordername'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   

<!-- --------------------------- Price Edit -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <label>Edit Your Price</label>
                                            <input class="form-control" value="<?php echo $pricerow['price']; ?>" name="editprice" placeholder="">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                                </div>


<?php
include "headfoot/footer.php";

?>