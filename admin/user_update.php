<?php
require_once "_config.php";
$name = $username = $password = "";
$name_err = $username_err = $password_err = "";

if(isset($_POST["id_user"]) && !empty($_POST["id_user"])){
    $id_user = $_POST["id_user"];
    $input_name = $_POST["nama_user"];
    if(empty($input_name) || !filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter your name.";
		echo $name_err;
    } else{
        $name = $input_name;
    }
	$input_username = trim($_POST["username"]);
	if(empty($input_username)){
		$username_err = "Please enter an valid username.";     
	} else{
		$username = $input_username;
	}
	$input_password = trim($_POST["password"]);
	if(empty($input_password)){
		$input_password = "Please enter an valid password.";   
	} else{
		$password = $input_password;
	}
    if(empty($name_err) && empty($username_err) && empty($password_err)){
        $sql = "UPDATE user SET nama_user=?, username=?, password=? WHERE id_user=?";
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_username, $param_password, $id_user);
            $param_name = $name;
            $param_username = $username;
            $param_password = $password;
            if(mysqli_stmt_execute($stmt)){
                header("location: page_user.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}
?>