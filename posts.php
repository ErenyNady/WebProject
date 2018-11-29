<?php
    include('config.php');
    $sql1 = "SELECT * FROM posts WHERE id = ". $_GET['id'] . " ;";
    $result1 = mysqli_query($con,$sql1);
    $posts = mysqli_fetch_assoc($result1);

    $sql2 = "SELECT * FROM reference WHERE post_id = ". $_GET['id'] . " and type = 1 ;";
    $result2 = mysqli_query($con,$sql2);
    $videos = mysqli_fetch_assoc($result2);

    $sql3 = "SELECT * FROM reference WHERE post_id = ". $_GET['id'] . " and type = 2 ;";
    $result3 = mysqli_query($con,$sql3);
    $youtube_link = mysqli_fetch_assoc($result3);

    $sql4 = "SELECT * FROM posts WHERE id != ". $_GET['id'] . " ;";
    $category = mysqli_query($con,$sql4);

    $sql5 = "SELECT * FROM reference WHERE post_id = ". $_GET['id'] . " and type = 3 ;";
    $references = mysqli_query($con,$sql5);

    $sql6 = "SELECT * FROM reference WHERE post_id = ". $_GET['id'] . " and type = 4 ;";
    $visit_sites = mysqli_query($con,$sql6);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHILDREN CARE</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/modern-business.css" rel="stylesheet">
        <link href="css/wie_page.css" rel="stylesheet">
        <link href="css/dis.css" rel="stylesheet">



  </head>

  <body>

   
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">WELCOME TO <SMALL>BABY CARE SITE</SMALL></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
          </ul>
        </div>
      </div>
    </nav>

    
    <div class="container">

    
      <h1 class="mt-4 mb-3">
        <?php echo $posts['title'] ?>
    
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $posts['title']; ?></li>
      </ol>

      <div class="row">

      
        <div class="col-md-8">

          
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $posts['img_post'] ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $posts['subtitle'];?></h2>
              <p class="card-text"><?php echo $posts['post'] ?></p>
              <h2>More videos to Know More</h2>
              <iframe width="493" height="411" src="<?php echo $videos['ref']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <br>
              <a href="<?php echo $youtube_link['ref']; ?>" class="btn btn-primary">See More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
            
            </div>
          </div>

          
          <ul class="pagination justify-content-center mb-4">
             <li class="page-item">
              <a class="page-link" href="http://www.google.com">Google</a>
            </li>
          </ul>

        </div>

     
        <div class="col-md-4">

          
          <!-- <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div> -->

          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div>
                  <ul class="list-unstyled mb-0" >
                    <?php
                      while($allposts=mysqli_fetch_assoc($category))
                      echo '<li>
                      <a href="posts.php?id='.$allposts['id'].'">'.$allposts['title'].'</a>
                    </li>';
                    ?>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                   
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>

          
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
            <?php
              while ($refs=mysqli_fetch_assoc($references)) {
                echo '<a href="'.$refs['ref'].'">'.$refs['title'].'</a><br>';
              }
            ?>
              <h1>visit web sites..</h1>
              <?php
                while ($refs=mysqli_fetch_assoc($visit_sites)) {
                  echo '<a href="'.$refs['ref'].'">'.$refs['title'].'</a><br>';
                }
              ?>
            </div>
          </div>

        </div>

      </div>
     

    </div>
   
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      
    </footer>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
