<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $userModel->deleteUserById($id);//Delete existing user
}
header('location: list_users.php');
?><?php
// Start the session to store CSRF token
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();



// Tạo CSRF token nếu chưa có
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Tạo mã token ngẫu nhiên
}

// Xử lý khi có yêu cầu xóa người dùng
if (!empty($_GET['id']) && !empty($_POST['csrf_token'])) {
    $id = $_GET['id'];
    
    // Kiểm tra CSRF token có hợp lệ không
    if (hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        // Chỉ cho phép xóa user nếu chính user đó yêu cầu
        if ($id == $_SESSION['user_id']) {
            $userModel->deleteUserById($id); // Xóa người dùng
            header('location: list_users.php');
            exit();
        } else {
            echo "You are not allowed to delete this user!";
        }
    } else {
        echo "Invalid CSRF token!";
    }
}
?>
