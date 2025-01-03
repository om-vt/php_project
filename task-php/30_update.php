<?php
    $con = mysqli_connect('localhost', 'root', '', 'profile');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['uid'];
    $username=$_POST['username'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];

    $options=$_POST['options'];

    $descreption=$_POST['description'];

$sql ="update all users2 username='$username',dob='$dob',gender='$gender',options='$options',subject='$subject' where"

    
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "Select * from  users2 where id=$id";
    $single= mysqli_query($con,$sql);
    if(mysqli_num_rows($single)>0){
        $result= mysqli_fetch_assoc($single);
        $subject= explode(',',$result['subject']);
    }
}else{
    header('Location:read.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Form</title>
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
                <input type="hidden" value="<?=$result['id']?>" name="uid">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" value="<?=$result['username']?>" name="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob"value="<?=$result['dob']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="<?=$result['gender']=='Male'?'checked':'' ?>" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="female" name="gender"value="<?=$result['gender']=='Female'?'checked':'' ?>" value="Female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="other" name="gender"value="<?=$result['gender']=='Other'?'checked':'' ?>" value="Other">
                    <label class="form-check-label" for="other">Other</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Select Subjects:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" <? in_array('math',$subject)?'checked':''?> id="math" name="subjects[]" value="Math">
                    <label class="form-check-label" for="math">Math</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"<? in_array('science',$subject)?'checked':''?> id="science" name="subjects[]" value="Science">
                    <label class="form-check-label" for="science">Science</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" <? in_array('english',$subject)?'checked':''?> id="english" name="subjects[]" value="English">
                    <label class="form-check-label" for="english">English</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label"> Description:</label>
                <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Enter any comments here"><?=$result['comments']?></textarea>
            </div>
            <div class="mb-3">
                <label for="options" class="form-label">Country:</label>
                <select class="form-select" id="options" name="options">
                    <option   selected value="">--- Select Country ---</option>
                    <option  <?=$result['options']=='india'?'checked':'' ?> value="india">India</option>
                    <option  <?=$result['options']=='nepal'?'checked':'' ?> value="nepal">Nepal</option>
                    <option  <?=$result['options']=='chaina'?'checked':'' ?> value="china">China</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoWtFBw+ARxtK5pHtNJUE6ErwzzrHz91o+2doUJjrxYr7N9" crossorigin="anonymous"></script>
</body>
</html>