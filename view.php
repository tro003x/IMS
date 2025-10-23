<?php include('header.php'); ?>


    <div class="container">
        <div class="row">
        <div class="header d-flex justify-content-between flex-row">
            <h4 class="mt-3 mb-2 text-left">Dashboard > Products</h4>
            <form class="d-flex mt-3 mb-2 justify-content-around" role="search">
                <input class="form-control me-2" type="search" placeholder="Search by Code" aria-label="Search" name="search">
                <button class="btn btn-primary" type="submit">Search</button>        
            </form> 



        </div>
            <table class="table table-bordered table-hover table-light table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Product Name</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>QTY</th>
                        <th>Cost</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php 


                if(isset($_GET["search"]) && !empty($_GET["search"])){
                    $search_kw = $_GET["search"];
                    $sql = "SELECT * from tb_product where pdt_code = '$search_kw'";
                }
                else{
                    $sql = "SELECT * from tb_product ORDER BY p_id DESC";
                }
                $res = mysqli_query(
                    $conn, $sql
                );
                mysqli_close($conn);

                while($rows=$res->fetch_assoc())
                {
                ?>
                    <tr>
                        <td><?php echo $rows["p_id"]; ?></td>
                        <td><?php echo $rows["pdt_name"]; ?></td>
                        <td><?php echo $rows["pdt_code"]; ?></td>
                        <td><?php echo $rows["pdt_category"]; ?></td>
                        <td><?php echo $rows["pdt_stock"] . $rows["pdt_unit"]; ?></td>
                        <td><?php echo $rows["pdt_cost"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo  $rows["p_id"]; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo  $rows["p_id"]; ?>">Delete</a>
                        </td>
                    </tr>
                <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include('footer.php');?>  