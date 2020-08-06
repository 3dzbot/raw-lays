<?php
include 'connect_db.php';
include 'phpqrcode/qrlib.php';
//ФИО, номер телефона, поштовий адрес, дата народження, місто участі, спосіб посещения
//way_of_visiting = 0 - пішком
//way_of_visiting = 1 - на машині

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$city = $_POST['city'];
$way_of_visiting_str = $_POST['way_of_visiting'];
if ($way_of_visiting_str == "Пешком") {
    $way_of_visiting = 0;
} else {
    $way_of_visiting = 1;
}

if (!$name) {
    $response = array(
        'error' => "name is required "
    );
    echo json_encode($response);
    exit;
}
if (!$phone) {
    $response = array(
        'error' => "phone is required "
    );
    echo json_encode($response);
    exit;
}
if (!$email) {
    $response = array(
        'error' => "email is required "
    );
    echo json_encode($response);
    exit;
}
if (!$birthday) {
    $response = array(
        'error' => "birthday is required "
    );
    echo json_encode($response);
    exit;
}
if (!$city) {
    $response = array(
        'error' => "city is required "
    );
    echo json_encode($response);
    exit;
}
if (!$way_of_visiting) {
    $response = array(
        'error' => "way_of_visiting is required "
    );
    echo json_encode($response);
    exit;
}

$connect = mysqli_connect($conn_db['ip'], $conn_db['username'], $conn_db['pass'], $conn_db['database']);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");

$sql_insert_new_user = "INSERT INTO `users`(`name`, `phone`, `email`, `birthday`, `city`, `way_of_visiting`) VALUES ('$name','$phone','$email','$birthday','$city',$way_of_visiting)";
$query = mysqli_query($connect, $sql_insert_new_user);
if (!$query) {
    echo "Error: " . $sql_insert_new_user . "<br>" . $connect->error;
    exit;
}

$sql_inserted_user_id = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '{$email}' && `phone`='$phone'");
$result = mysqli_fetch_assoc($sql_inserted_user_id);
$user_id = $result['id'];

//
$script_dir1 = realpath(dirname(__FILE__));
$script_dir2 = realpath($_SERVER['DOCUMENT_ROOT']);
$subdir = trim(substr($script_dir1, strlen($script_dir2)), "/\\");

$request_scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';

$site_url = $request_scheme . '://' . $_SERVER['HTTP_HOST'] . '/';
if (!empty($subdir)) {
    $site_url .= $subdir . '/';
    $request = substr($_SERVER['REQUEST_URI'], strlen('/' . $subdir));
} else {
    $request = $_SERVER['REQUEST_URI'];
}
$user_qr = $site_url . 'user.php/?id=' . $user_id;

$sql_insert_qr = "UPDATE `users` SET `qr` = '$user_qr' where `email` = '$email' and `phone` = '$phone'";

$query = mysqli_query($connect, $sql_insert_qr);
if (!$query) {
    echo "Error: " . $sql_insert_qr . "<br>" . $connect->error;
    exit;
}

$image = "user_qrs/user_qr_$user_id.png";
$qr = QRcode::png($user_qr, $image);
// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: ' . mime_content_type($image) . ';base64,' . $imageData;

$image_url_src = $site_url.'/'.$image;

$mail_text = "
	<html><head><title>Привет от почтового сервера</title></head>
	<body>
    <h3>Ваш QR:</h3></br> <img src=\"$image_url_src\"></br>
	</body>
	</html>";

$to      = $email;
$subject = 'Lays register';
$message = $mail_text;

// $headers = "From: from@example.com\r\n".
//     "Reply-To: lays@login.com\r\n".
//     'MIME-Version: 1.0\r\n'.
//     'Content-type: text/html; charset=UTF-8\r\n'.
//     "X-Mailer: PHP/" . PHP_VERSION;

// Что бы отправлять HTML, устанавливаем Content-type заголовки
$headers  = 'MIME-Version: 1.0' . "\r\n";
// тут установить ту кодировку с которой вы работатете
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

$sent = mail($to, $subject, $message, $headers);

//unlink($image);

// Echo out a sample image
//echo $mail_text;
//echo "QR text: $user_qr";

header("Location: http://a0459647.xsph.ru/thanks");
