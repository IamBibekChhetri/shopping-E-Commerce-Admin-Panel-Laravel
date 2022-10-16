<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$categorysql = "SELECT * FROM category where id = '$id'";
$categoryresult = mysqli_query($conn,$categorysql);
$categoryrow=mysqli_fetch_assoc($categoryresult);
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Category</h1>
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
                                    <form role="form" action="update_category.php?id=<?php echo $categoryrow['id']; ?>" method = "Post">
                                    <div class="form-group">
                                            <label>Select Brand</label>
                                            <select class="form-control" name="selectbrand">
                                            <?php
                                            
                                            $sql = "SELECT * FROM brand";
                                            $result = mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($result)){?>
                                                <option value=" <?php echo $row['id']; ?>" <?php echo $row['id'] == $categoryrow['brandid']?'selected':''; ?>><?php echo $row['brandname'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- --------------------------- Category Add -------------------------------  -->

                <div class="col-lg-12">
                    <div class="panel panel-default">
                
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                            <label>Edit Your Category</label>
                                            <input class="form-control" value="<?php echo $categoryrow['categoryname']; ?>" name="editcategory" placeholder="">
                                        </div>
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
include "/headfoot/footer.php";

?>