<div class="inner-bg">
  <div class="container">
    <div class="row">
      <!-- Page Heading -->
      <h1 class="page-header" style="color: #fff;"><strong>Add Post</strong></h1>
      <!-- <div class="row">
              <div class="col-sm-8 col-sm-offset-2 text"> -->
                  <div class="description">
                    <p style="color:#ff1a1a;">
                      <strong>
                          <?php echo isset($addpost_fail) ? $addpost_fail : '';?>
                      </strong>
                    </p>
                    <p style="color:#40ff00;">
                        <strong>
                            <?php echo isset($addpost_success) ? '- '.$addpost_success.' -' : '';?>
                        </strong>
                    </p>
                  </div>
              <!-- </div>
          </div> -->
        <div class="form-box" style="margin-top: 40px;">
          <div class="form-top">
            <div class="form-top-left">
              <h3>Add a new post here</h3>
              <p>The post when submitted will be displayed in home page of the application.</p>
            </div>
            <div class="form-top-right">
              <i class="fa fa-pencil"></i>
            </div>
          </div>
          <div class="form-bottom">
            <?php
            $attributes = array('class'=>'registration-form');
            echo form_open_multipart('post/addpost', $attributes);
            ?>
            <div class="form-group">
              <label class="sr-only" for="form-first-name">Title</label>
              <input type="text" name="title" value="<?php echo set_value('title'); ?>" placeholder="Title" class="form-first-name form-control" id="form-first-name">
            </div>
            <?php if (form_error('title')!=""):?>
              <div class="alert alert-danger" > <?php echo form_error('title'); ?></div>
            <?php endif;?>


            <div class="form-group">
              <label class="sr-only" for="form-first-name">Content</label>
              <!-- <input type="text" name="sender_name" value="<?php echo set_value('reg_fullname'); ?>" placeholder="Fullname" class="form-first-name form-control" id="form-first-name"> -->
              <textarea class="form-control noresize" name="content" rows="8" placeholder="Enter your content here..." style="width:100%;"></textarea>
            </div>
            <?php if (form_error('content')!=""):?>
              <div class="alert alert-danger" > <?php echo form_error('content'); ?></div>
            <?php endif;?>

            <div class="form-group">
              <label class="sr-only" for="form-first-name">Upload image</label>
              <input type="file" name="image">
            </div>
            <?php echo isset($error) ? '<div class="alert alert-danger" >'.$error.'</div>' : ''; ?>

            <button type="submit" class="btn">Send</button>
          </form>
        </div>
      </div>
  </div>
</div>
</div>
