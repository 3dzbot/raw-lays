<?php
include 'connect_db.php';

$id = $_GET['id'];

if (!$id) {
    $response = array(
        'error' => "id is required "
    );
    echo json_encode($response);
    exit;
}

$connect = mysqli_connect($conn_db['ip'], $conn_db['username'], $conn_db['pass'], $conn_db['database']);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");

$sql_get_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '{$id}'");
$result = mysqli_fetch_assoc($sql_get_user);

if (mysqli_num_rows($sql_get_user) == 0) {
    echo "Error: user with id = " . $id . " does not exists <br>";
    exit;
}

if (!$result) {
    echo "Error: " . $sql_get_user . "<br>" . $connect->error;
    exit;
}

$user_id = $result['id'];
$user_name = $result['name'];
$user_phone = $result['phone'];
$user_email = $result['email'];
$user_birthday = $result['birthday'];
$user_city = $result['city'];
$user_way_of_visiting = $result['way_of_visiting'] === '0' ? 'пешком' : 'на машине';
$user_scanned_previously = $result['scanned_previously'] === '0' ? 'Нет' : '<font color="red">Да</font>';

echo "id: $user_id<br>";
echo "name: $user_name<br>";
echo "phone: $user_phone<br>";
echo "email: $user_email<br>";
echo "birthday: $user_birthday<br>";
echo "city: $user_city<br>";
echo "way of visiting: $user_way_of_visiting<br>";
echo "scanned previously: $user_scanned_previously<br>";

if($result['scanned_previously'] === '0'){
    $sql_update_scanned = "UPDATE `users` SET `scanned_previously` = '1' where `id` = '$id'";
    $query = mysqli_query($connect, $sql_update_scanned);
    if(!$query){
        echo "Error: " . $sql_update_scanned . "<br>" . $connect->error;
        exit;
    }
}


