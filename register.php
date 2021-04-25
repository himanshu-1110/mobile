<?php 
require('top.php');
?>
                   <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							
							<div class="col-xs-12">
								<form id="contact-form" action="#" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id="name" name="name" placeholder="Your Name*">
										</div>
										
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" id="email" name="email" placeholder="email*">
										</div>
										
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" id="mobile" name="mobile" placeholder="Mobile*">
										</div>
										
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" id="password" name="password" placeholder="Your Password*">
										</div>
										
									</div>
									
									<div class="contact-btn">
										<button type="button" onclick="register_message()" class="fv-btn">Ragister</button>
									</div>
								</form>
								 <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
							</div>
						</div> 
                
				</div>
            </div>
				
        </div>
    </section>
<?php require('footer.php')?>
