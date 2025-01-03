<?php
$con = mysqli_connect('localhost', 'root', '', 'profile');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['username'])) {
        echo "<script>
        alert('Username field is required');
        </script>";
    } elseif (empty($_POST['dob'])) {
        echo "<script>
        alert('Date of Birth field is required');
        </script>";
    } elseif (empty($_POST['options'])) {
        echo "<script>
        alert('Country selection is required');
        </script>";
    } elseif (!isset($_POST['subjects'])) {
        echo "<script>
        alert('At least one subject must be selected');
        </script>";
    } elseif (empty($_POST['comments'])) {
        echo "<script>
        alert('Comments field is required');
        </script>";
    } elseif (empty($_POST['gender'])) {
        echo "<script>
        alert('Gender selection is required');
        </script>";
    } else {
        $username = $_POST['username'];
        $dob = $_POST['dob'];
        $options = $_POST['options'];
        $subjects = implode(", ", $_POST['subjects']);
        $comments = $_POST['comments'];
        $gender = $_POST['gender'];
        $query = "INSERT INTO users2 (username, dob, options, subjects, comments, gender) VALUES ('$username', '$dob', '$options', '$subjects', '$comments', '$gender')";
        if (mysqli_query($con, $query)) {
            echo "<script>
            alert('Registration successful');
            </script>";
        } else {
            echo "<script>
            alert('Error: Could not save data');
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQnEFeAZ43zxb1sci3PDC1mSjL1UCoDN9kJv2IZFAAz+6qqlyGd8/oz1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            color: #343a40;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="other" name="gender" value="Other">
                    <label class="form-check-label" for="other">Other</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Select Subjects:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="math" name="subjects[]" value="Math">
                    <label class="form-check-label" for="math">Math</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="science" name="subjects[]" value="Science">
                    <label class="form-check-label" for="science">Science</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="english" name="subjects[]" value="English">
                    <label class="form-check-label" for="english">English</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label"> Description:</label>
                <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Enter any comments here"></textarea>
            </div>
            <div class="mb-3">
                <label for="options" class="form-label">Country:</label>
                <select class="form-select" id="options" name="options">
                    <option selected value="">--- Select Country ---</option>
                    <option value="india">India</option>
                    <option value="nepal">Nepal</option>
                    <option value="china">China</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoWtFBw+ARxtK5pHtNJUE6ErwzzrHz91o+2doUJjrxYr7N9" crossorigin="anonymous"></script>
</body>
</html>
