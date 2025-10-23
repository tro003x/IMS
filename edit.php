<?php include('header.php'); ?>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Product</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/ims/update.php">
                        <?php
                            if(isset($_GET['id']) && !empty($_GET['id'])){
                                $id = $_GET['id'];
                                $query = "SELECT * FROM `tb_product` WHERE p_id =" . $id ;
                                $res = mysqli_query($conn, $query);
                                while($rows=$res->fetch_assoc())
                                {
                            ?>
                            <input type="hidden" name="id" value="<?php echo $rows["p_id"] ?>">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $rows["pdt_name"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="code">Code </label>
                                <input type="text" class="form-control" name="code"  value="<?php echo $rows["pdt_code"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" name="cat"  value="<?php echo $rows["pdt_category"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="text" class="form-control" name="cost"  value="<?php echo $rows["pdt_cost"] ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="cost">Stock QTY</label>
                                <input type="text" class="form-control" name="qty"  value="<?php echo $rows["pdt_stock"] ?>">
                            </div>
                            <?php
                                }
                            };
                            ?>
                            <button type="submit" class="btn btn-success">Update Product Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include('footer.php'); ?>