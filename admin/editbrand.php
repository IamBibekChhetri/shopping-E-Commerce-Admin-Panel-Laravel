<?php
include "headfoot/header.php";
require_once "../connection.php";
$id = $_GET['id'];
$brandsql = "SELECT * FROM brand where id = '$id'";
$brandresult = mysqli_query($conn,$brandsql);
$brandrow=mysqli_fetch_assoc($brandresult);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Brand</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="update_brand.php?id=<?php echo $brandrow['id']; ?>" method = "Post">
                                        <div class="form-group">
                                            <label>Edit Your Brand Here:</label>
                                            <input class="form-control" value="<?php echo $brandrow['brandname']; ?>" name="editbrandname">
                                        </div>
                                      
                                       
                                        <a href="viewbrand.php"><button type="submit" class="btn btn-primary">Update</button></a>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>

<?php
    include "headfoot/footer.php";

?>