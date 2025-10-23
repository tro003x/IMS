<?php include('header.php');?>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Add Product</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/ims/insert_pdt.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="code">Code </label>
                                <input type="text" class="form-control" name="code" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" name="cat" required>
                            </div>
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="text" class="form-control" name="cost" required>
                            </div>
                            <div class="form-group">
                                <label for="cost">Stock QTY</label>
                                <input type="text" class="form-control" name="qty" required>
                            </div>
                            <div class="form-group">
                                <label for="unit">Unit</label>
                                <select class="form-control mb-2" name="unit" required>
                                    <option value="">Select Unit</option>
                                    <option value="pc">Pc</option>
                                    <option value="ml">mL</option>
                                    <option value="kg">Kg</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('footer.php');?>