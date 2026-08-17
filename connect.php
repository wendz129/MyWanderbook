<?php

// class Database
// {
//     private $host = "localhost";
//     private $username = "root";
//     private $password = "";
//     private $db = "mybook_db";

//     function connect()
//     {

//         $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
//     }

//     function read()
//     {
//         $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
    
//     }

//     function save()
//     {
        
//     }
// }
$host = "localhost";
$username = "root";
$password = "";
$db = "mybook_db";

$connection = mysqli_connect($host, $username, $password, $db);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

$userid = time();
$first_name = "wendell";
$last_name = "rosete";
$gender = "Male";
$email = "wendell@example.com";
$password_hash = password_hash("123456", PASSWORD_DEFAULT);
$url_address = "wendell-rosete";

$sql = "INSERT INTO users (userid, first_name, last_name, gender, email, password, url_address) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($connection, $sql);

if (!$stmt) {
    die("Prepare failed: " . mysqli_error($connection));
}

mysqli_stmt_bind_param($stmt, "issssss", $userid, $first_name, $last_name, $gender, $email, $password_hash, $url_address);

if (mysqli_stmt_execute($stmt)) {
    echo "Inserted successfully.";
} else {
    echo "Insert failed: " . mysqli_error($connection);
}

mysqli_stmt_close($stmt);
mysqli_close($connection);


// ?php

// class Database
// {

//     private $host = "localhost";
//     private $username = "root";
//     private $password = "";
//     private $db = "mybook_db";

//     function connect()
//     {
//         $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
//         return $connection;
//     }

//     function read($query)
//     {
//         $conn = $this->connect();
//         $result = mysqli_query($conn,$query);

//         if(!$result)
//         {
//             return false;
//         }
//         else
//         {
//             $data = false;
//             while($row = mysqli_fetch_assoc($result)) 
//             {
                
//                 $data[] = $row;

//             }
//             return $data;

//         }
//     }

//     function save($query)
//     {
//         $conn = $this->connect();
//         $result = mysqli_query($conn,$query);

//         if(!$result)
//         {
//             return false;
//         }else
//         {
//             return true;
//         }

//     }
// }
// $DB = new Database();

// $query = "select * from users";
// $data = $DB->read($query);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

