<div class="inner-bg">
  <div class="container">



    <div class="row">
      <!-- Page Heading -->
      <h1 class="page-header" style="color: #fff;"><strong>Contact Us</strong></h1>
      <!-- <div class="row">
              <div class="col-sm-8 col-sm-offset-2 text"> -->
                  <div class="description">
                    <p style="color:#ff1a1a;">
                      <strong>
                          <?php echo isset($msg_send_failed) ? $msg_send_failed : '';?>
                      </strong>
                    </p>
                    <p style="color:#40ff00;">
                        <strong>
                            <?php echo isset($msg_send_success) ? '- '.$msg_send_success.' -' : '';?>
                        </strong>
                    </p>
                  </div>
              <!-- </div>
          </div> -->
        <div class="form-box" style="margin-top: 40px;">
          <div class="form-top">
            <div class="form-top-left">
              <h3>Email us now</h3>
              <p>Fill in the form below to get your enquiry answered is short time:</p>
            </div>
            <div class="form-top-right">
              <i class="fa fa-pencil"></i>
            </div>
          </div>
          <div class="form-bottom">
            <?php
            $attributes = array('class'=>'registration-form');
            echo form_open('user/send_email_validate', $attributes);
            ?>
            <div class="form-group">
              <label class="sr-only" for="form-first-name">Fullname</label>
              <input type="text" name="sender_name" value="<?php echo set_value('sender_name'); ?>" placeholder="Fullname" class="form-first-name form-control" id="form-first-name">
            </div>
            <?php if (form_error('sender_name')!=""):?>
              <div class="alert alert-danger" > <?php echo form_error('sender_name'); ?></div>
            <?php endif;?>

            <div class="form-group">
              <label class="sr-only" for="form-email">Email</label>
              <input type="text" name="sender_email" value="<?php echo set_value('sender_email'); ?>" placeholder="Email..." class="form-email form-control" id="form-email">
            </div>
            <?php if (form_error('sender_email')!=""):?>
              <div class="alert alert-danger" > <?php echo form_error('sender_email'); ?></div>
            <?php endif;?>

            <div class="form-group">
              <label class="sr-only" for="form-first-name">Subject</label>
              <input type="text" name="email_subject" value="<?php echo set_value('email_subject'); ?>" placeholder="Subject" class="form-first-name form-control" id="form-first-name">
            </div>
            <?php if (form_error('email_subject')!=""):?>
              <div class="alert alert-danger" > <?php echo form_error('email_subject'); ?></div>
            <?php endif;?>

            <div class="form-group">
              <label class="sr-only" for="form-first-name">Message</label>
              <!-- <input type="text" name="sender_name" value="<?php echo set_value('reg_fullname'); ?>" placeholder="Fullname" class="form-first-name form-control" id="form-first-name"> -->
              <textarea class="form-control noresize" name="email_message" rows="8" placeholder="Enter you message here..." style="width:100%;"></textarea>
            </div>
            <?php if (form_error('email_message')!=""):?>
              <div class="alert alert-danger" > <?php echo form_error('email_message'); ?></div>
            <?php endif;?>

            <button type="submit" class="btn">Send</button>
          </form>
        </div>
      </div>
  </div>
</div>
</div>
