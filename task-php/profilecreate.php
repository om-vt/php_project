<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="pro_post.php" method="post">
            <h2>Profile</h2>
            <div class="mb-3">
                <label for="name" class="form-label"> Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="Father_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="Father_name" name="father_name">
            </div>
            <div class="mb-3">
                <label for="Mother_name" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="Mother_name" name="mother_name">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">DOB</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>