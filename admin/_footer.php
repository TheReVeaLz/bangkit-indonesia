<!-- footer -->
<nav class="navbar fixed-bottom navbar-light bg-light" style="height:56px;">
    <div class="navbar-brand" href="#">Copyright 2022 &copy; <a class="font-weight-bold" style="text-decoration: none;" target="_blank"> Bangkitkan Semangat Indonesia</a>. All right reserved.</div>
</nav>
<!-- ./footer -->

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- popperjs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- bootstrap 4 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_SESSION['alertMsg'])) {
	$msg = $_SESSION['alertMsg'];
	echo "<script type='text/javascript'>window.addEventListener('load', () => {alert('$msg');});</script>";
	$_SESSION['alertMsg']=null;
}
?>