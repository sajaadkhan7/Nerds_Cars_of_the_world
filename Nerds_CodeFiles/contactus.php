<!doctype html>
<html lang="en">

<head>
	<title>Cars Of The World:Contact Us</title>
	<style>
		/* Style inputs */
		.contactus [type=text],
		input[type=email],
		textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}



		/* Style the container/contact section */
		.contactus {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 10px;
		}

		/* Create two columns that float next to eachother */
		.column {
			float: left;
			width: 50%;
			margin-top: 6px;
			padding: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
.address-wrap{

   
   
    /* background: #fff; */
	background-color: #f2f2f2;
    box-shadow: 0px 3px 10px 0px rgba(38, 59, 94, 0.1);
    -webkit-box-flex: 1;
    margin-left: 3%;
    flex: 1 1 40%;
    margin-top: 25px;}
		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {

			.column,
			input[type=submit] {
				width: 100%;
				margin-top: 0;
			}
		}
	</style>
	<?php require('requires/head.php');  ?>

	<!-- contact us -->
	<div class="container-fluid">
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.3985197818934!2d-80.40614968512944!3d43.38959917745511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b8a78cad8e0c7%3A0xff890e93ef71682!2sA-Wing%20%2F%20B-Wing%2C%20299%20Doon%20Valley%20Dr%2C%20Kitchener%2C%20ON%20N2P%202N6!5e0!3m2!1sen!2sca!4v1608723992035!5m2!1sen!2sca"
			width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
			tabindex="0"></iframe>
	</div>
	<div class="container-fluid">

		<div class="container">
			<div style="text-align:center">
				<h2>Contact Us</h2>
				<p>Drop a message or visit us if you have any queries.</p>
			</div>
			<div class="row">
				<div class="column col-sm-8  p-5 contactus">
					<form action="/action_page.php">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" placeholder="Your name..">
						
						<label for="Email">Email</label>
						<input type="email" id="Email" name="email">
						<label for="subject">Subject</label>
						<textarea id="subject" name="subject" placeholder="Write something.."
							style="height:50px"></textarea>
						<input type="submit" class="btn btncolor mt-auto" value="Submit">
					</form>
				</div>
				<div class="col-sm-4">
					<div class="row">

<div class="address-wrap  p-5">
						<h4>What is your story? Get in touch with us.</h4>
						<br>
						<p>We are always here to help you out and find the best car for you, Feel free to contact us.
							your query is our one of the goals.
						</p>
		<br>
						<div class="address-btm">
							<div class="location-wrapp">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<span> 299 Doon Valley Dr</span> 
							</div>

							<div class="email-wrapp">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<a href="mailto:sajaadkhan7@gmail.com">Carsoftheworld@gmail.com</a>
							</div>

							<div class="mob-wrapp">
								<i class="fa fa-mobile" aria-hidden="true"></i>
								<a href="tel:+1 (519) 781-3138">+1 (519) 781-3138</a>
							</div>
						</div>
</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact us -->



	<?php require('requires/footer.php'); ?>
	</body>

</html>