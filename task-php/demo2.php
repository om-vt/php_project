<?php
$connect = mysqli_connect('localhost', 'root', '', 'app25');
// if ($connect) {
//     echo "Connected with your DB";
// } else {
//     echo "Something went wrong Retry <br>";
//     echo mysqli_connect_error();
// }

//Create a table
// $table1 = "CREATE TABLE demo2 (
//     roll_noll INT(20) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(30),
//     email VARCHAR(50)
// );";

// if (mysqli_query($connect, $table1)) {
//     echo "Table created successfully<br>";
// } else {
//     echo "Error creating table: ";
//     echo mysqli_error($connect);
//     echo "<br>";
// }

//Insert data into the table
// $table = "INSERT INTO demo2 (name, email) VALUES ('ankit', 'anikit@123');";

// if (mysqli_query($connect, $table)) {
//     echo "Data inserted successfully<br>";
// } else {
//     echo "Error inserting data: ";
//     echo mysqli_error($connect);
// }

//single data enter 
// $sql="insert into demo2(name,email) values('deepanshu','deepa@221gmail.com');";
// if(mysqli_query($connect,$sql)){
//     echo "data successfully enter";
// }else{
//     echo mysqli_error($connect);
// }


//multiple data enter
// $sql="insert into demo2(name,email) values('adarsh','adarsh@12gmail.com');";
// $sql .="insert into demo2(name,email) values('vishal','vishal@gmail.com');";
// $sql .="insert into demo2(name,email) values('op','op@gmail.com');";
// if(mysqli_multi_query($connect,$sql)){
//     echo "mutiple data enter into table";
// }else{
//     echo mysqli_error($connect);
// }
$sql = "Insert into demo2(name,email) values('kumar','kumar@123gmail.com')";
if(mysqli_query($connect,$sql)){
    echo mysqli_insert_id($connect);
}else{
    echo "id not found";
}
?>
