 <!-- Page Content -->
    <div id="blog" class="container">
        <br><br>
        <div class="center">
            <h2><?= $title ?></h2>
            <p class="lead">Check All Latest News &amp; Events</p>
        </div>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">News</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
              
               <?php foreach ($news as $row) : ?>
                <h2>
                    <a href="<?php echo site_url('/news/'.$row['news_id']); ?>"><?php echo $row['title']; ?></a>
                </h2>
                <p class="lead">
                    by <a href="<?php echo base_url(); ?>">Flixmates</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on: <?php echo $row['date']; ?></p>
                <hr>
                <a href="<?php echo site_url('/news/'.$row['news_id']); ?>">
                    <img class="img-responsive img-hover" src="<?php echo base_url(); ?>/assets/<?php echo $row['image'];  ?>" alt="">
                </a>
                <hr>
                <p>
                    <?php echo $row['content']; ?>
                </p>
                <p><a class="btn btn-primary" href="<?php echo site_url('/news/'.$row['news_id']); ?>">Read More</a></p>
			   
                <hr>
                <?php endforeach; ?>
                <!-- Second Blog Post -->
               
               
        </div>

            <!-- Blog Sidebar Widgets Column -->
            
        </div>
        <!-- /.row -->