<?php require 'header.php';?>
<body class="container">
<!-- banner -->
<div class="banner" id="home">
<div class="agileinfo-dot">
<div class="container">
		<!-- header -->
		<header>
		<?php require 'nav.php';?>
		</header>
	<!-- //header -->
	<!-- banner-text -->
	<div class="banner-text">
			<h2>Uyahamba Mfwethu</h2>
			<div class="book-form" id="register">
			<p>Pick your destination</p>
			   <form action="#" method="post">
					<div class="col-md-3 form-time-w3layouts">
							<label>Select City Branch</label>
							<select class="form-control">
								<option>City, Branch</option>
								<option>Durban</option>
								<option>Newcastle</option>
							</select>
					</div>
					<div class="col-md-3 form-date-w3-agileits">
									<label>Pick Up Date</label>
									<input  id="datepicker1" name="Text" type="text" value="pick up on" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="col-md-3 form-date-w3-agileits">
						      <label>Drop Off Date</label>
									<input  id="datepicker2" name="Text" type="text" value="drop off on" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="col-md-3 form-left-agileits-submit">
						  <input type="submit" value="Search for Car">
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<div class="banner-btm-agileits">
				<div class="col-md-4 bann-left-w3-agile">
					<h3><span>24/7</span>Support</h3>
				</div>
				<div class="col-md-4 button-agileits">
					<a href="#specials" class="hvr-ripple-out scroll">Get in touch</a>
				</div>
				<div class="col-md-4 bann-right-wthree">
					<a href="mailto:support@camellogs.net">support@camellogs.net</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- //banner -->
<div class="about" id="specials">
	<div class="col-md-4 banner_bottom_special1">
			 <h3 class="title-agileits-w3layouts white-w3ls">Specials Here</h3>
			 <p class="para-w3l">Some exciting content here</p>
			 <div class="button-agileits">
			<a href="#" class="hvr-ripple-out" data-toggle="modal" data-target="#myModal2">Book Now</a>
			 </div>
	</div>
	<div class="col-md-4 banner_bottom_special2">
			 <h3 class="title-agileits-w3layouts white-w3ls">Specials Here</h3>
			 <p class="para-w3l">Some exciting content here</p>
			 <div class="button-agileits">
			<a href="#" class="hvr-ripple-out" data-toggle="modal" data-target="#myModal2">Book Now</a>
			 </div>
	</div>
	<div class="col-md-4 banner_bottom_left">
			 <h3 class="title-agileits-w3layouts white-w3ls">Specials Here</h3>
			 <p class="para-w3l">Some exciting content here</p>
			 <div class="button-agileits">
			<a href="#" class="hvr-ripple-out" data-toggle="modal" data-target="#myModal2">Book Now</a>
			 </div>
	</div>
	<div class="clearfix"> </div>
 </div>
<?php require 'footer.php';?>
<!-- //for bootstrap working -->
</body>
</html>
