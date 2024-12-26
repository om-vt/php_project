<?php
// $connect = mysqli_connect('localhost', 'root', '', 'app25');

// if ($connect) {
//     echo "Connected with your DB<br>";
// } else {
//     echo "Something went wrong. Retry.<br>";
//     echo mysqli_connect_error();
//     exit();
// }

// // Create a new table with updated columns
// $table1 = "CREATE TABLE demo5 (
//     roll_no INT(20) PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(30),
//     subject VARCHAR(50),
//     address VARCHAR(100),
//     zip_code VARCHAR(10)
// );";

// if (mysqli_query($connect, $table1)) {
//     echo "Table demo5 created successfully<br>";
// } else {
//     echo "Error creating table: " . mysqli_error($connect) . "<br>";
// }

// // Insert data into the new table
// $table = "INSERT INTO demo5 (name, subject, address, zip_code) VALUES 
//     ('ankit', 'Mathematics', 'Delhi', '1236541');";

// if (mysqli_query($connect, $table)) {
//     echo "Data inserted successfully into demo5<br>";
// } else {
//     echo "Error inserting data: " . mysqli_error($connect) . "<br>";
// }

// Single data entry


// $sql = "INSERT INTO demo5 (name, subject, address, zip_code) 
//         VALUES ('deepanshu', 'Physics', 'Lucknow', '226371');";
// if (mysqli_query($connect, $sql)) {
//     echo "Data entered successfully<br>";
// } else {
//     echo "Error: " . mysqli_error($connect) . "<br>";
// }

// Multiple data entry

// $sql = "INSERT INTO demo5 (name, subject, address, zip_code) 
//         VALUES 
//         ('adarsh', 'Chemistry', 'sonbhadra', '256981'),
//         ('vishal', 'Biology', 'varanasi', '459681'),
//         ('op', 'History', 'chanduali', '236581');";
// if (mysqli_query($connect, $sql)) {
//     echo "Multiple data entries inserted into demo5<br>";
// } else {
//     echo "Error: " . mysqli_error($connect) . "<br>";
// }

// find last  ID 

// $sql = "INSERT INTO demo5 (name, subject, address, zip_code) 
//         VALUES ('kumar', 'English', 'jaunpur', '236501');";
// if (mysqli_query($connect, $sql)) {
//     echo "New record inserted with ID: " . mysqli_insert_id($connect) . "<br>";
// } else {
//     echo "Error: " . mysqli_error($connect) . "<br>";
// }


?>
