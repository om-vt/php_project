<?php
$connect = mysqli_connect('localhost', 'root', '', 'app25');
// if ($connect) {
//     echo "Connected with your DB";
// } else {
//     echo "Something went wrong Retry <br>";
//     echo mysqli_connect_error();
// }

//Create a table


// $table1 = "CREATE TABLE demo3 (
//     S_no INT(20) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(30),
//     phone_no bigint(50)
// );";

// if (mysqli_query($connect, $table1)) {
//     echo "Table created successfully<br>";
// } else {
//     echo "Error creating table: ";
//     echo mysqli_error($connect);
//     echo "<br>";
// }

//Insert data into the table


// $table = "INSERT INTO demo3 (name, phone_no) VALUES ('ankit', 98563265888);";

// if (mysqli_query($connect, $table)) {
//     echo "Data inserted successfully<br>";
// } else {
//     echo "Error inserting data: ";
//     echo mysqli_error($connect);
// }

//single data enter 


// $sql="insert into demo3(name,phone_no) values('deepanshu',63256985236);";
// if(mysqli_query($connect,$sql)){
//     echo "data successfully enter";
// }else{
//     echo mysqli_error($connect);
// }


//multiple data enter


// $sql="insert into demo3(name,phone_no) values('adarsh',236585666);";
// $sql .="insert into demo3(name,phone_no) values('vishal',4565566652);";
// $sql .="insert into demo3(name,phone_no) values('op',9696364271);";
// if(mysqli_multi_query($connect,$sql)){
//     echo "mutiple data enter into table";
// }else{
//     echo mysqli_error($connect);
// }


$sql = "Insert into demo3(name,phone_no) values('kumar',6388334625)";
if(mysqli_query($connect,$sql)){
    echo mysqli_insert_id($connect);
}else{
    echo "id not found";
}
// ?>
