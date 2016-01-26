<div class="inner-bg">
    <div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
                <h1><strong>The Nepali Style</strong> Login &amp; Register Forms</h1>
                <div class="description">
                  <p>
                    You can <strong>"login and register"</strong> with these two forms below. Have fun and <strong>Cheers!</strong> :)
                  </p>
                  <p style="color:#ff1a1a;">
                    <strong>
                        <?php echo isset($message_login_error) ? $message_login_error : '';?>
                        <?php echo isset($message_registration_error) ? $message_registration_error : '';?>
                        <?php echo isset($msg_dwnld_error) ? '- '.$msg_dwnld_error.' -' : ''; ?>
                        <?php echo isset($msg_suscribe_error) ? '- '.$msg_suscribe_error.' -' : ''; ?>
                    </strong>
                  </p>
                  <p style="color:#40ff00;">
                      <strong>
                          <?php echo isset($msg_logged_out) ? '- '.$msg_logged_out.' -' : '';?>
                          <?php echo isset($message_successfully_registered) ? '- '.$message_successfully_registered.' -' : '';?>
                          <?php echo isset($msg_suscribe_success) ? '- '.$msg_suscribe_success.' -' : ''; ?>
                      </strong>
                  </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">

              <div class="form-box">
                <div class="form-top">
                  <div class="form-top-left">
                    <h3>Login to our site</h3>
                      <p>Enter username and password to log on:</p>
                  </div>
                  <div class="form-top-right">
                    <i class="fa fa-lock"></i>
                  </div>
                  </div>
                  <div class="form-bottom">
                <?php
                  $attributes = array('class'=>'login-form');
                  echo form_open('user/login_validate', $attributes);
                ?>
                  <div class="form-group">
                    <label class="sr-only" for="form-username">Username</label>
                      <input type="text" name="log_username" value="<?php echo set_value('log_username');?>" placeholder="Username..." class="form-username form-control" id="form-username">
                    </div>
                    <?php if(form_error('log_username')!=""): ?>
                    <div class="alert alert-danger" ><?php echo form_error('log_username'); ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                      <label class="sr-only" for="form-password">Password</label>
                      <input type="password" name="log_password" value="<?php echo set_value('log_password');?>" placeholder="Password..." class="form-password form-control" id="form-password">
                    </div>
                    <?php if(form_error('log_password')!=""): ?>
                    <div class="alert alert-danger" ><?php echo form_error('log_password'); ?></div>
                    <?php endif; ?>
                    <button type="submit" class="btn">Sign in!</button>
                </form>
              </div>
            </div>

          <div class="social-login">
                <h3>...or login with:</h3>
                <div class="social-login-buttons">
                  <a class="btn btn-link-2" href="#">
                    <i class="fa fa-facebook"></i> Facebook
                  </a>
                  <a class="btn btn-link-2" href="#">
                    <i class="fa fa-twitter"></i> Twitter
                  </a>
                  <a class="btn btn-link-2" href="#">
                    <i class="fa fa-google-plus"></i> Google Plus
                  </a>
                </div>
              </div>

            </div>

            <div class="col-sm-1 middle-border"></div>
            <div class="col-sm-1"></div>

            <div class="col-sm-5">

              <div class="form-box">
                <div class="form-top">
                  <div class="form-top-left">
                    <h3>Sign up now</h3>
                      <p>Fill in the form below to get instant access:</p>
                  </div>
                  <div class="form-top-right">
                    <i class="fa fa-pencil"></i>
                  </div>
                  </div>
                  <div class="form-bottom">
                  <?php
                    $attributes = array('class'=>'registration-form');
                    echo form_open('user/signup_validate', $attributes);
                  ?>
                  <div class="form-group">
                    <label class="sr-only" for="form-first-name">Username</label>
                      <input type="text" name="reg_username" value="<?php echo set_value('reg_username'); ?>" placeholder="Username" class="form-first-name form-control" id="form-first-name">
                  </div>
                  <?php if (form_error('reg_username')!=""):?>
                  <div class="alert alert-danger" > <?php echo form_error('reg_username'); ?></div>
                  <?php endif;?>

                  <div class="form-group">
                    <label class="sr-only" for="form-email">Email</label>
                    <input type="text" name="reg_email" value="<?php echo set_value('reg_email'); ?>" placeholder="Email..." class="form-email form-control" id="form-email">
                  </div>
                  <?php if (form_error('reg_email')!=""):?>
                  <div class="alert alert-danger" > <?php echo form_error('reg_email'); ?></div>
                  <?php endif;?>

                  <div class="form-group">
                    <label class="sr-only" for="form-first-name">Password</label>
                      <input type="password" name="reg_password" value="<?php echo set_value('reg_password'); ?>" placeholder="Password" class="form-first-name form-control" id="form-password">
                  </div>
                  <?php if (form_error('reg_password')!=""):?>
                  <div class="alert alert-danger" > <?php echo form_error('reg_password'); ?></div>
                  <?php endif;?>

                  <div class="form-group">
                    <label class="sr-only" for="form-first-name">Confirm Password</label>
                      <input type="password" name="reg_confirm_password" value="<?php echo set_value('reg_confirm_password'); ?>" placeholder="Confirm Password" class="form-first-name form-control" id="form-password">
                  </div>
                  <?php if (form_error('reg_confirm_password')!=""):?>
                  <div class="alert alert-danger" > <?php echo form_error('reg_confirm_password'); ?></div>
                  <?php endif;?>

                  <div class="form-group">
                    <label class="sr-only" for="form-first-name">Fullname</label>
                      <input type="text" name="reg_fullname" value="<?php echo set_value('reg_fullname'); ?>" placeholder="Fullname" class="form-first-name form-control" id="form-first-name">
                  </div>
                  <?php if (form_error('reg_fullname')!=""):?>
                  <div class="alert alert-danger" > <?php echo form_error('reg_fullname'); ?></div>
                  <?php endif;?>
                  <button type="submit" class="btn">Sign me up!</button>
                </form>
              </div>
              </div>

            </div>
        </div>

    </div>
</div>
