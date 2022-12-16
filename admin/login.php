<?php
include '_config.php';
require_once 'kvnLog.php';
?>
<!DOCTYPE html>
<meta charset="utf-8" content="width=device-width, initial-scale=1.0">
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/setting.png">
    <style>
        body {
            background: #eee;
        }
        #frm {
            border: solid gray 1px;
            width: 25%;
            border-radius: 25px;
            margin: 150px auto;
            background: white;
            padding: 25px;
			text-align:center;
        }
        #btn {
            color: #fff;
            background: #337ab7;
            padding: 7px;
            margin-left: 50%;
			border-color: transparent;
			border-radius: 10px;
        }
    </style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="assets/kvn.css">
</head>
<body class="l-wrap__bg">
    <div id="frm">
        <h1>Login</h1>
        <form name="myForm" action="" method="POST">
            <p>
                <label>Username: </label>
                <input type="text" id="username" name="username" value="<?php echo $_POST['username']; ?>" required>
            </p>
            <p>
                <label>Password: </label>
                <input type="password" id="password" name="password" required><br>
				<i class="bi bi-eye-slash prevent-select" id="togglePassword" style="cursor: pointer;margin-left: 6%;"> Show Password</i>
            </p>
            <p>
                <input type="submit" id="btn" value="Login" />
            </p>
        </form>
    </div>
	<div id="preloader"></div>
    <script>
	const togglePassword = document.querySelector('#togglePassword');
	const password = document.querySelector('#password');
	togglePassword.addEventListener('click', function (e) {
		const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
		password.setAttribute('type', type);
		this.classList.toggle('bi-eye');
	});
    </script>
</body>
<script>
document.addEventListener('DOMContentLoaded', () => {
	const preloader = document.querySelector('#preloader');
	if (preloader) {
		window.addEventListener('load', () => {
		preloader.remove();
		});
	}
})
</script>
</html>