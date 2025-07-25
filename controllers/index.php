<div class="fh5co-section" id="Contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-push-6 animate-box">
				<h3>For Your Booking</h3>

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<form action="<?php echo base_url('BookingController/save'); ?>" method="post">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">First Name</label>
							<input type="text" name="fname" class="form-control" placeholder="Your firstname" required>
						</div>
						<div class="col-md-6">
							<label for="lname">Last Name</label>
							<input type="text" name="lname" class="form-control" placeholder="Your lastname" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Your email address" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="subject">Shoot Type</label>
							<input type="text" name="subject" class="form-control" placeholder="Type of shoot (e.g., Wedding, Pre-Wedding)" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">Enquiry</label>
							<textarea name="message" class="form-control" rows="5" placeholder="Write us something..." required></textarea>
						</div>
					</div>

					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary">
					</div>
				</form>		
			</div>
		</div>
	</div>
</div>
