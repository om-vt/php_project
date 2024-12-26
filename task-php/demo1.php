<?php
$connect = mysqli_connect('localhost', 'root', '', 'app25');
// if ($connect) {
//     echo "Connected with your DB";
// } else {
//     echo "Something went wrong Retry <br>";
//     echo mysqli_connect_error();
// }

// Create a table
// $table = "CREATE TABLE demo1 (
//     id_no INT(20) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(30),
//     address VARCHAR(50)
// );";

// if (mysqli_query($connect, $table)) {
//     echo "Table created successfully<br>";
// } else {
//     echo "Error creating table: ";
//     echo mysqli_error($connect);
//     echo "<br>";
// }

// Insert data into the table
// $table = "INSERT INTO demo1 (name, address) VALUES ('ankit', 'narayanpur');";

// if (mysqli_query($connect, $table)) {
//     echo "Data inserted successfully<br>";
// } else {
//     echo "Error inserting data: ";
//     echo mysqli_error($connect);
// }

//single data enter 
// $sql="insert into demo1(name,address) values('deepanshu','sultanpur');";
// if(mysqli_query($connect,$sql)){
//     echo "data successfully enter";
// }else{
//     echo mysqli_error($connect);
// }


//multiple data enter
// $sql="insert into demo1(name,address) values('adarsh','sonbhadra');";
// $sql .="insert into demo1(name,address) values('vishal','bhadohi');";
// $sql .="insert into demo1(name,address) values('op','mirzapur');";
// if(mysqli_multi_query($connect,$sql)){
//     echo "mutiple data enter into table";
// }else{
//     echo mysqli_error($connect);
//}
$sql = "Insert into demo1(name,address) values('kumar','varanasi')";
if(mysqli_query($connect,$sql)){
    echo mysqli_insert_id($connect);
}else{
    echo "id not found";
}
?>
