<?php
$connect = mysqli_connect('localhost', 'root', '', 'app25');
// if ($connect) {
//     echo "Connected with your DB<br>";
// } else {
//     echo "Something went wrong. Retry.<br>";
//     echo mysqli_connect_error();
//     exit();
// }
// Create a table with additional columns
// $table1 = "CREATE TABLE demo4 (
//     roll_noll INT(20) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(30),
//     email VARCHAR(50),
//     address VARCHAR(100),
//     phone_no VARCHAR(15)
// );";
// if (mysqli_query($connect, $table1)) {
//     echo "Table demo4 created successfully<br>";
// } else {
//     echo "Error creating table: " . mysqli_error($connect) . "<br>";
// }
// Insert data into the table
// $table = "INSERT INTO demo4 (name, email, address, phone_no) VALUES 
//     ('ankit', 'anikit@123', 'Delhi, India', '9876543210');";
// if (mysqli_query($connect, $table)) {
//     echo "Data inserted successfully into demo4<br>";
// } else {
//     echo "Error inserting data: " . mysqli_error($connect) . "<br>";
// }
// // Single data entry
// $sql = "INSERT INTO demo4 (name, email, address, phone_no) 
//         VALUES ('deepanshu', 'deepa@221gmail.com', 'Lucknow, India', '9123456789');";
// if (mysqli_query($connect, $sql)) {
//     echo "Data entered successfully<br>";
// } else {
//     echo "Error: " . mysqli_error($connect) . "<br>";
// }
// Multiple data entry


// $sql = "INSERT INTO demo4 (name, email, address, phone_no) 
//         VALUES 
//         ('adarsh', 'adarsh@12gmail.com', 'Kanpur, India', '9012345678'),
//         ('vishal', 'vishal@gmail.com', 'Mumbai, India', '9876543210'),
//         ('op', 'op@gmail.com', 'Chennai, India', '8765432109');";
// if (mysqli_query($connect, $sql)) {
//     echo "Multiple data entries inserted into demo4<br>";
// } else {
//     echo "Error: " . mysqli_error($connect) . "<br>";
// }

// $sql = "INSERT INTO demo4 (name, email, address, phone_no) 
//         VALUES ('kumar', 'kumar@123gmail.com', 'Hyderabad, India', '8543219870');";
// if (mysqli_query($connect, $sql)) {
//     echo "New record inserted with ID: " . mysqli_insert_id($connect) . "<br>";
// } else {
//     echo "Error: " . mysqli_error($connect) . "<br>";
// }
?>
