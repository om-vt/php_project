<?php
$con = mysqli_connect('localhost','root','','app25');
if($con){
    echo " connect with database";
}else{
    echo "Something went wrong conncetion fail";
    echo mysqli_connect_error();
}


// $sql = "Create table users(id int(20) primary key,name varchar(25),email varchar(50))";
// if(mysqli_query($con,$sql)){
//     echo "table created";
// }else{
//     echo mysqli_error($con);
// }
//=================================================
// $sql= "Insert into users(id,name,email) values(1,'vishal','vishal@gmail.com')";
// if(mysqli_query($con,$sql)){
//     echo "data inserted successfully";
// }else{
//     echo mysqli_error($con);
// }
//==================================================
// $sql="Insert into users(id,name,email) values(2,'kumar','kumar@gmail.com');";
// $sql .="Insert into users(id,name,email) values(3,'shiv','shiv@gmail.com');";
// $sql .="Insert into users(id,name,email) values(4,'ram','ram@gmail.com');";
// // echo $sql
// mysqli_multi_query($con,$sql);

//==================================================
// $sql="Insert into users(name,email) values('kumar','kumar@gmail.com')";
// if(mysqli_query($con,$sql)){
//     echo mysqli_insert_id($con);
// }

// $sql ="Delete from users where id=8";
// echo mysqli_query($con,$sql);
// echo mysqli_affected_rows($con);    

//  $sql= "select * from users";
// // print_r(mysqli_query($con,$sql));
//  $result = mysqli_query($con,$sql);
//  echo mysqli_num_rows($result);
//  echo "<pre>";
//  print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));
//  print_r(mysqli_fetch_all($result,MYSQLI_BOTH));
//  print_r(mysqli_fetch_all($result,MYSQLI_ASSOC)[0]['name']);
// print_r(mysqli_fetch_assoc($result));
//while($record = mysqli_fetch_assoc($result)){
    // print_r($record)
    // print_r($record['name']);    // its return all name from table record name col.
//}

$sql ="update users set name='ramkumar' where id=4";
mysqli_query($con,$sql);
echo mysqli_affected_rows($con);

?>