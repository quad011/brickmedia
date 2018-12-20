<?php

    $to = "quad011@hotmail.com";
    $from = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $headers = "From: Brick Media";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"subject"} = "subject";
    $fields{"message"} = "message";

    $body = "Message from Brick Media:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Brick Media</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/font-awesome.min.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>



	<div class="flex-w flex-str size1 overlay1">
		<div class="flex-w flex-col-sb wsize1 bg0 p-l-65 p-t-37 p-b-50 p-r-80 respon1">
			<div class="wrappic1">
				<a href="#">
					<img src="images/icons/logo.png" alt="IMG">
				</a>
			</div>

			<div class="w-full flex-c-m p-t-80 p-b-90">
				<div class="wsize2">
					<h3 class="l1-txt1 p-b-34 respon3">
						Thank you for contact us!
					</h3>

					<p class="m2-txt1 p-b-46">
						<a class="backButton" href="/">GO BACK</a>
					</p>

				</div>
			</div>

			<div class="flex-w">
				<!-- <a href="#" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-youtube-play"></i>
				</a> -->
			</div>
		</div>


		<div class="wsize1 simpleslide100-parent respon2">
			<!--  -->
			<div class="simpleslide100">
				<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
				<!-- <div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
				<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg03.jpg');"></div> -->
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="vendor/tilt/tilt.jquery.min.js"></script> -->
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>

</html>
