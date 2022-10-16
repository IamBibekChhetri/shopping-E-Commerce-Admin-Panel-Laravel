
<?php
require_once "../connection.php";
include "headfoot/header.php";
$sql = "SELECT * FROM order_table";
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
                                            <th>Order</th>
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
                                            $brandsql = "SELECT * FROM brand WHERE id = '$row[brandid]'";
                                            $brandquery = mysqli_query($conn, $brandsql);
                                            $brandrow=mysqli_fetch_array($brandquery);

                                        ?>
                                            <td><?php echo $brandrow["brandname"]; ?></td>
                                        <?php
                                            $categorysql = "SELECT * FROM category WHERE id = '$row[categoryid]'";
                                            $categoryquery = mysqli_query($conn, $categorysql);
                                            $categoryrow=mysqli_fetch_array($categoryquery);

                                        ?>
                                        <td><?php echo $categoryrow["categoryname"]; ?></td>

                                        <?php
                                            $productsql = "SELECT * FROM products WHERE id = '$row[productid]'";
                                            $productquery = mysqli_query($conn, $productsql);
                                            $productrow=mysqli_fetch_array($productquery);

                                        ?>
                                        <td><?php echo $productrow["productname"]; ?></td>
                                        <td><?php echo $row["ordername"]; ?></td>
                                        <td><?php echo $row["status"]; ?> </td>
                                        <td class="center"><a href="editorder.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                                            <a onclick=" return confirm('Are You sure you want to Delete?');" href="delete_order.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Delete</button></a>
                                            <?php

                                            if($row['status'] == 'Active'){ ?>
                                                <a href="activated/orderdeactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-danger">Deactive</button></a>

                                            <?php } else{ ?>
                                                <a href="activated/orderactive.php?id=<?php echo $row['id']; ?>"><button type="reset" class="btn btn-success">Active</button></a>
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