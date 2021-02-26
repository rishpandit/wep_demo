<?php 
		include 'includes/header.php';
?>

<!-- Inquiry Form Start -->
	<div id="getintouch">
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 box p-5">
				<h2 class="text-center mb-4">Get In Touch</h2>			
						<form>
    
    <div class="form-group">
        <label class="form-check-label">Full Name:</label>
        <input type="text" class="form-control" placeholder="Enter Your Full Name" name="c_name" required>
    </div>

    <div class="form-group">
        <label class="form-check-label">Email:</label>
        <input type="text" class="form-control" placeholder="Enter Your Email Address" name="c_email" required>
    </div>
    
    <div class="form-group">
        <label class="form-check-label">Contact Number:</label>
        <input type="text" class="form-control" placeholder="Enter Your Contact Number" name="c_contact" required>
    </div>

    <div class="form-group">
        <label class="form-check-label">Subject:</label>
        <input type="text" class="form-control" placeholder="Message Subject" name="c_subject" required>
    </div>

    <div class="form-group">
        <label class="form-check-label">Message</label>
        <textarea class="form-control" cols="10" rows="4" placeholder="Write Your Message Here" required=""></textarea>
    </div>

    
    <div class="form-group pt-3 float-right">
        <button type="submit" class="btn btn-outline-primary" >Upload</button>
    </div>

</form>

					
				</div>

				<div class="col-md-6">
					<ul class="pt-5 text-right">
						<li>Company Name</li>
						<li>Founder: XXXXXXXXXX</li>
						<li>Contact: +91-XXXXXXXXXX</li>
						<li>Email: XXXXXXXXXX</li>
						
					</ul>
				</div>
			</div>
		</div>

	</div>
<!-- Inquiry Form Start -->		






<?php 
		include 'includes/footer.php';
?>