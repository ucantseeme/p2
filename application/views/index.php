<div class="inner-bg">
    <!-- <div class="container"> -->
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron" style="background: rgba(0, 0, 0, 0.3) !important; color: #fff;">
          <h1>"The Nepali Style" Magazine</h1>
          <p>The Nepali Style Magazine is a visionary organization dedicated towards enhancing lifestyle Journalism in Nepal. With a young and dynamic team of committed individuals we are striving to offer our readers international standards in literature and photography with insights that are purely local.<p>
            <a class="btn btn-lg btn-primary" href="<?php echo base_url('user/suscribe');?>" role="button">Click to suscribe &raquo;</a>
          </p>
        </div>
    <!-- </div> -->

    <div class="container">
        <?php foreach($posts as $post){ ?>
        <?php $imageName = $post->image_name; ?>
        <div class="row" style="background: rgba(255, 255, 255, 0.8) !important;">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="<?php echo base_url().'assets/img/post_Images/'. $imageName;?>" alt="<?php echo $post->image_name;?>">
                </a>
            </div>
            <div class="col-md-5">
                <h3><strong><?php echo $post->title;?> </strong><small>Overview <i class="fa fa-level-down"></i></small></h3>

                <p style="color: #555;">
                    <?php echo $post->content; ?>
                </p>
                <a class="btn btn-primary" href="<?php echo base_url('welcome/download_file');?>">Download this issuse <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
        <!-- /.row -->
        <?php } ?>

        <!-- /.row -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">«</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">»</a>
                    </li>
                </ul>
            </div>
            <p style="color:#fff;">
                Archive <i class="fa fa-level-down"></i>
            </p>
            <!-- Using custom helper "listData" to display data in dropdown -->
            <?php echo form_dropdown('dropdown',$dropdownItems,$selected = 8); ?>
        </div>
    </div>
</div>
