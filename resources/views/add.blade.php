<!DOCTYPE html>
<html>
	<head>
		<title>Add your information</title>
		<meta charset = "UTF-8" />
		<!-- CDN from Font Awesome -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

		<!-- Our Custom CSS Page Link -->
		<link rel="stylesheet" href="../css/add.css">
	</head>

	<body>
		<form action="{{route('address.post')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

			<div class="container">
				<div class="boro_section">

					<p class="text">Submit your information</p>

					<div class="section">
						<label for="first_name">Enter your name</label>&nbsp;<span style="color:red">*</span>
						<input type="text" id="first_name" name="name" placeholder="enter your name" required>
					</div>

					<div class="section">
						<label for="address">Enter your Address</label>&nbsp;<span style="color:red">*</span>
						<input type="text" id="address" name="address" placeholder="enter your Address" required>
					</div>

					<div class="section">
						<label for="email">Enter your email</label>&nbsp;<span style="color:red">*</span>
						<input type="email" id="email" placeholder="enter your email" required name="email">
					</div>

                    <div class="section">
                        <label for="email">Enter your number</label>&nbsp;<span style="color:red">*</span>
                        <input type="number" id="phone" placeholder="enter your number" required name="number">
                    </div>

					<div class="select">
						<select name="gender">
							<option value="-">Select Your Gender:</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Others">Others</option>
						</select>
					</div>

					<div class="select">
						<select name="blood">
							<option value="-">Enter Your Blood Group:</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</div>

					<br>

					<p>	Please Upload an image: [required for you]	</p>

					<input type="file" id="myFile" name="image" required>

					<button type="submit" class="btn">SUBMIT</button>

					<p class="botton_text">By Clicking the sign up button, you agree to our<br> <a href="#">Terms and conditions</a> and&nbsp;<a href="#">Privacy Policy</a></p>

				</div>

			</div>

		</form>
	</body>
</html>
