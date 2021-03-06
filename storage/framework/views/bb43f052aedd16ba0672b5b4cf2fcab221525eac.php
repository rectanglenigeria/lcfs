;

<?php $__env->startSection('content'); ?>
	



<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Contact Us</h1>
							</div>
						</div>
					</div>
				</section>

				

				<div class="container">

					<div class="row">
						<div class="col-lg-6">

							<!--<div class="alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
							</div> -->

							<h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

							
							<?php if(Session::has('notification')): ?>
          <p class="alert alert-success alert-sm alert-dismissable"><?php echo e(Session::get('notification')); ?></p>
        <?php endif; ?>



							<form action="<?php echo e(URL::to('/contact_message/send')); ?>" method="post" class="contact_form row" enctype="multipart/form-data">

							  <?php echo e(csrf_field()); ?>


								<div class="cf_response"></div>

								<p class="col-sm-6 kl-fancy-form <?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">

									<label class="control-label">FIRSTNAME</label>

									<input type="text" name="firstname" id="cf_name" class="form-control" placeholder="Please enter your first name" value="<?php echo e(old('firstname')); ?>" tabindex="1" maxlength="35" required>

									<?php if($errors->has('firstname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                    </span>
                                    <?php endif; ?>

									
								</p>

								<p class="col-sm-6 kl-fancy-form <?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">

									<label class="control-label">LASTNAME</label>
									<input type="text" name="lastname" id="cf_lastname" class="form-control" placeholder="Please enter your last name" value="<?php echo e(old('lastname')); ?>" tabindex="1" maxlength="35" required>

									<?php if($errors->has('lastname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                    <?php endif; ?>


									
								</p>
								<p class="col-sm-12 kl-fancy-form <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

									<label class="control-label">EMAIL</label>
									<input type="text" name="email" id="cf_email" class="form-control h5-email" placeholder="Please enter your email address" value="<?php echo e(old('email')); ?>" tabindex="1" maxlength="35" required>
									<?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>

									
								</p>
								<p class="col-sm-12 kl-fancy-form <?php echo e($errors->has('subject') ? ' has-error' : ''); ?>">

									<label class="control-label">SUBJECT</label>
									<input type="text" name="subject" id="cf_subject" class="form-control" placeholder="Enter the subject message" value="<?php echo e(old('subject')); ?>" tabindex="1" maxlength="35" required>

									<?php if($errors->has('subject')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('subject')); ?></strong>
                                    </span>
                                    <?php endif; ?>

									<label class="control-label">SUBJECT</label>
								</p>
								<p class="col-sm-12 kl-fancy-form <?php echo e($errors->has('message') ? ' has-error' : ''); ?>">

									<label class="control-label">MESSAGE</label>
									<textarea name="message" id="cf_message" class="form-control" cols="30" rows="10" placeholder="Your message" tabindex="4" required>
										<?php echo e(old('message')); ?>

									</textarea>

									<?php if($errors->has('message')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('message')); ?></strong>
                                    </span>

                                    <?php endif; ?>

									
								</p>

								<!--<p class="col-sm-12">
									<label for='uploaded_file'>Select A File To Upload:</label>
									<input type="file" id="uploaded_file" name="attachment">


									<?php if($errors->has('file')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('file')); ?></strong>
                                    </span>

                                    <?php endif; ?>

								</p>-->



								<p class="col-sm-12">
									<button class="btn btn-fullcolor js-button-cf-submit" type="submit">Send</button>
								</p>

							</form>
						</div>
						<div class="col-lg-6">

							<h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
							<p>For fast express response from our support team, make use of live chat system below this page.</p>

							<hr>

							<h4 class="heading-primary">The <strong>Office</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-4">
								<!--<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>-->
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@laughtercommunity.com">info@laughtercommunity.com</a></li>
							</ul>

							<!--<hr>

							<h4 class="heading-primary">Business <strong>Hours</strong></h4>
							<ul class="list list-icons list-dark mt-4">
								<li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
								<li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
								<li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
							</ul>-->

						</div>

					</div>

				</div>

			</div>


     <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>