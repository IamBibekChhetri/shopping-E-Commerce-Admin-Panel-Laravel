
<?php
require_once "../connection.php";
include "headfoot/header.php";
$sql = "SELECT * FROM price ";
$result = mysqli_query($conn,$sql);
?>

<!-- DataTales Example -->
<div class="container-fluid">
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Report Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Customer Image</th>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Product Image</th>
                                            <th>Product</th>
                                            <th>Brand</th>
                                            <th>category</th>
                                            <th>Size</th>
                                            <th>Order</th>
                                            <th>Price</th>
                                                                                       
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php if (mysqli_num_rows($result)>0){ ?> 

                                        <?php while ($row=mysqli_fetch_array($result)){ ?>
                                        <tr>
                                        
<!-- --------------------------  Customer Details ---------------------------------------- -->

                                        <?php
                                            $customersql = "SELECT * FROM customer";
                                            $customerquery = mysqli_query($conn, $customersql);
                                            $customerrow=mysqli_fetch_array($customerquery);

                                        ?>
                                            <td><img src="../img/<?php echo $customerrow['customerpic']; ?>"height="50px"></td>
                                            <td><?php echo $customerrow["customername"]; ?></td>
                                            <td><?php echo $customerrow["address"]; ?></td>
                                            <td><?php echo $customerrow["phone"]; ?></td>
                                            <td><?php echo $customerrow["email"]; ?></td>


                                            <?php
                                                $productsql = "SELECT * FROM products";
                                                $productquery = mysqli_query($conn, $productsql);
                                                $productrow=mysqli_fetch_array($productquery);
    
                                            ?>
                                             <td><img src="../img/<?php echo $productrow['productpic']; ?>"height="50px"></td>
                                            <td><?php echo $productrow["productname"]; ?></td>
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
                                            $sizesql = "SELECT * FROM size";
                                            $sizequery = mysqli_query($conn, $sizesql);
                                            $sizerow=mysqli_fetch_array($sizequery);

                                        ?>
                                        <td><?php echo $sizerow["size"]; ?></td>

                                        
                                        <?php
                                            $ordersql = "SELECT * FROM order_table WHERE id = '$row[orderid]'";
                                            $orderquery = mysqli_query($conn, $ordersql);
                                            $orderrow=mysqli_fetch_array($orderquery);

                                        ?>
                                        <td><?php echo $orderrow["ordername"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        

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
