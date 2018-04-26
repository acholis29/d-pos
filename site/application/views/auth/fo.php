<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    	$this->load->view("shared/_headerlogin");
?>


    
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-7 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url(<?php echo base_url(); ?>assets/pages/img/login/bg1.jpg)">
						<!--<img class="login-logo" src="<?php echo base_url(); ?>assets/pages/img/login/logo.png" /> -->
					</div>
                </div>
                <div class="col-md-5 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <h1>Beauty Salon Chasier</h1>
                        <p> </p>
                        <!--<form action="javascript:;" class="login-form" method="post">-->
						<?php
							$attributes = array('class' => 'login-form', 'id' => 'frm_login');						
							echo form_open('/Auth/login',$attributes); 
						?>
                            <input type="hidden" name="grp" value="fo"/>						
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any username and password. </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="t_username" required/> 
								</div>
                            </div>
							<div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="t_password" required/> 
								</div>
                            </div>
							
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <button class="btn green" type="submit">Sign In</button>
									
                                </div>
                            </div>
							<div class="row">
                                <div class="col-sm-4">
								<?php 
								
								
								
								?>
								</div>
							</div>
                        <?php echo form_close(); ?>
						
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            
                            <div class="col-xs-12 bs-reset">
                                <div class="login-copyright text-right">
                                    <p><?php echo "Copyright &copy; diptasoft 2002 - " . date("Y"); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        

<?php
	$this->load->view("shared/_footerlogin");
?>