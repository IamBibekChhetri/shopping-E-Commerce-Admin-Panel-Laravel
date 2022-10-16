
<?php
require_once "../connection.php";
include "headfoot/header.php";
$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);
?>

<!-- DataTales Example -->
<div class="container-fluid">
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Brand Name</th>
                                            <th>category</th>
                                            <th>Product Item</th>
                                            <th>Product Image</th>
                                            <th>Status</th>
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php if (mysqli_num_rows($result)>0){ ?> 

                                        <?php while ($row=mysqli_fetch_array($result)){ ?>
                                        <tr>
                                        <td><?php echo $row["id"]; ?></td>
                                        <?php
                                            $brandsql = "SELECT * FROM brand WHERE id = '$row[brand_id]'";
                                            $brandquery = mysqli_query($conn, $brandsql);
                                            $brandrow=mysqli_fetch_array($brandquery);

                                        ?>
                                            <td><?php echo $brandrow["brandname"]; ?></td>
                                        <?php
                                            $categorysql = "SELECT * FROM category WHERE id = '$row[category_id]'";
                                            $categoryquery = mysqli_query($conn, $categorysql);
                                            $categoryrow=mysqli_fetch_array($categoryquery);

                                        ?>
                                        <td><?php echo $categoryrow["categoryname"]; ?></td>
                                        <td><?php echo $row["productname"]; ?></td>
                                        <td><img src="../img/<?php echo $row['productpic']; ?>"height="50px"></td>
                                        <td><?php echo $row["status"]; ?> </td>
                                        <td class="center"><a href="editproduct.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_product.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/productdeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/productactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
                                                </td>
                                        
                                                <?php } ?>
                                        </tr>

                                        <?php } ?>
                                    <?php } ?>
                                    </tbody>
                                     </table>
                            </div>
                        </div>
                    </div>

                </div>


<?php

include "headfoot/footer.php";
?>