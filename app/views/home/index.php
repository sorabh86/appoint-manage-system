<div id="home-carousal" class="carousel slide" > <!-- data-ride="carousel" -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/carousal/appointment-book-01.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1>APPOINTMENTS</h1>
					<p><span>Consult with our expert doctors, schedule appointment, chat with our team.</span></p>
					<a class="btn btn-lg btn-primary btn-border btn-border-black" href="<?= ASSET_ROOT ?>/patient/index" role="button">BOOK NOW <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="img/carousal/lab-test-02.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1>LAB TEST</h1>
					<p><span>You can Schedule appointment for lab test, our online portal is easy to use.</span></p>
					<a class="btn btn-lg btn-primary btn-border btn-border-black" href="#" role="button">BOOK NOW <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<a class="custom-control left" href="#home-carousal" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="custom-control right" href="#home-carousal" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	<!-- <a class="left carousel-control" href="#home-carousal" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#home-carousal" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->

	<a data-role="anchor" href="#scrollcontent" class="show-content"><span class="glyphicon glyphicon-chevron-down"></span></a>
</div>

<div class="wrapper">
    <a id="scrollcontent"></a>
    <div class="welcome bg-red">
		<div class="container">
			<h2 class="title">WELCOME</h2>
			<p class="welcome-txt" <span="">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
			<a class="btn btn-default btn-border btn-border-white">Read More <i class="glyphicon glyphicon-arrow-right"></i></a>
		</div>
	</div>
	
	<div class="choose-us">
		<div class="container">
			<h2 class="title">WHY CHOOSE US</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Qualified Doctors</h3>
						</div>
						<div class="panel-body">
							<img class="img-responsive" src="img/doctors/expert-doctor.jpg" alt="Expert Doctor">
							<p>Adipisicing elit. Mollitia quibusdam atque, unde magnam pariatur non, consectetur vel, eaque nisi ut modi numquam?</p>
							<p><a href="#" class="btn btn-border btn-border-black">Read More <span class="glyphicon glyphicon-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Qualified Doctors</h3>
						</div>
						<div class="panel-body">
							<img class="img-responsive" src="img/doctors/expert-doctor-03.jpg" alt="Expert Doctor">
							<p>Adipisicing elit. Mollitia quibusdam atque, unde magnam pariatur non, consectetur vel, eaque nisi ut modi numquam?</p>
							<p><a href="#" class="btn btn-border btn-border-black">Read More <span class="glyphicon glyphicon-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>Qualified Doctors</h3>
						</div>
						<div class="panel-body">
							<img class="img-responsive" src="img/doctors/expert-doctor.jpg" alt="Expert Doctor">
							<p>Adipisicing elit. Mollitia quibusdam atque, unde magnam pariatur non, consectetur vel, eaque nisi ut modi numquam?</p>
							<p><a href="#" class="btn btn-border btn-border-black">Read More <span class="glyphicon glyphicon-arrow-right"></span></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-black test-form">
		<div class="container">
			<div class="row">
				<div class="col-md-6 testimo">
					<h2>TESTIMONIAL</h2>
					<h3>What Our Patients Say About Us</h3>
					<div id="testimonials" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item">
								<div class="carousel-html"></div>
								<div class="container">
									<div class="carousel-caption">
										<img class="img-responsive" src="img/testimonials/client-01.png" alt="Client 1">
										<p>If you're viewing this page via a the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
									</div>
								</div>
							</div>
							<div class="item active">
								<div class="carousel-html"></div>
								<div class="container">
									<div class="carousel-caption">
										<img class="img-responsive" src="img/testimonials/client-02.png" alt="Client 1">
										<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#testimonials" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#testimonials" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3>Query for Appointment</h3>
							<p><span class="glyphicon glyphicon-earphone"></span> 234-456-5678</p>
						</div>
						<div class="panel-body">
							<form name="query-form" action="" method="POST" role="form">
						  	<div class="form-group">
						  		<label for="">Name :</label>
						  		<input name="name" type="text" class="form-control" id="" placeholder="Your Full Name" required>
						  	</div>
						  	<div class="form-group">
						  		<label for="">Phone No. :</label>
						  		<input name="phone" type="text" class="form-control" id="" placeholder="Your Phone No" required>
						  	</div>
						  	<div class="form-group">
						  		<label for="">Email :</label>
						  		<input name="email" type="email" class="form-control" id="" placeholder="Your email" required>
						  	</div>
						  	<div class="form-group">
						  		<label for="">Message :</label>
						  		<textarea name="message" class="form-control" placeholder="Your Message" rows="4" required></textarea>
						  	</div>
						  	<div class="form-group">
						  		<button name="submit" type="submit" class="btn btn-lg btn-primary">Submit</button>
					  		</div>
						  	</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>