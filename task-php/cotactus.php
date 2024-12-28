<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form action="contact_post.php" method="post">
    <div class="mb-3"><h2>Conatct us</h2></div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">NAME</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name" name="name">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Phone</label>
  <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="PHone number" name="phone">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
</div>
        
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Address</label>
  <input type="address" class="form-control" id="exampleFormControlInput1" placeholder="" name="address">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
    </form>
    </div>
</body>
</html>


















