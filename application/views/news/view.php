 <!-- Page Content -->
    <div id="blog" class="container">
        <br><br>
        <div class="center">
            <h2></h2>
            <p class="lead">Check All Latest News &amp; Events</p>
        </div>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="news.php">News Home</a>
                    </li>
                    <li class="active"></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $news['title']; ?></h1>
            </div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> Posted on <?php echo $news['date']; ?></p>
        </div></br>
        <div class="row">
            <div class="col-md-8 news">
                <img class="img-responsive" src="<?php echo base_url(); ?>/assets/<?php echo $news['image'];  ?>" alt=""></br>

                <p><h2><?php echo $news['content']; ?></h2></p></br>

            </div>
        </div>