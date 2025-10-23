<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page | IMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mt-5"> Login to IMS </h2>
            <form action="login.php">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Username:</label>
                    <input type="email" class="form-control" id="username" placeholder="Enter Username" name="uname">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>