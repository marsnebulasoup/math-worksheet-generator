<?php
include "include/layout.php";
?>
    <link rel="stylesheet" href="include/mful.css"></link>

    <script>
        function recaptchaCallback() {
            $('#submitBtn').removeAttr('disabled');
        };
    </script>
    <div style='padding-top:20px' class="container ">
        <h1>Contact us</h1>
        <h5>We will try to get back to you within 48 hours</h5>
        <h6>Alternatively, you can email customer support at customersupport@gobop.xyz</h6>
        <form style="padding-top:15px" method="post" action="include/cmailer.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="eg. John Smith" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="eg. name@example.com" required>
                </div>
            </div>
			<div class="form-row">
                <div class="form-group col-md-12">
				  <label for="message">Message</label>
				  <textarea placeholder="Form will auto resize to the text inside" id="message" name="message" rows="10" maxlength="500"  class="materialize-textarea" required></textarea>
				  <small id="message" class="form-text text-muted">Up to 500 characters</small>

				</div>
				
            </div>
			
            
            <div class="form-group">
                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Lci7GUUAAAAAM4--DadWx827CqwLiyhEXjsRqRn"></div>
            </div>
            <div class="form-group">
                <center><button type="submit" name="submit" id="submitBtn" name="submit" value="click" class="btn btn-lg btn-outline-primary" disabled>Submit query</button></center>
            </div>
            <?php include 'include/footer.php'; ?>

        </form>
    </div>