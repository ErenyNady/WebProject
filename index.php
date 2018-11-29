<?php
    include('config.php');
    $sql = "SELECT * FROM posts;";
    $result = mysqli_query($con,$sql);
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
    <link href="css/index_page.css" rel="stylesheet">

  </head>

  <body>


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">WELCOME TO <SMALL>BABY CARE SITE</SMALL></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

    </nav>

    <header>

          <div class="carousel-item active" style="background-image: url('./image/pic.jpg')">
            <div class="carousel-caption d-none d-md-block">


            </div>
          </div>

          </div>
        </div>

      <hr>
    </header>


    <div class="container">

      <h1 class="my-4">(protect Your Baby)</h1>
<p>
 One of the biggest decisions parents have to make after choosing to have a child involves deciding who will care for that child, especially during the early developmental years. Parents choose to resolve this difficult dilemma in many ways. Some families choose to use full-time childcare, while in other families one parent stays or works at home for all or part of the time. In other families, a parent chooses to leave the workforce completely in order to become the primary caregiver.

Finding appropriate and affordable child care is often a challenge. There are different options available in different places, and at many different price points (although all options are expensive). Each care option comes with its own advantages and disadvantages. It can be confusing for parents to sort though the different options, and to locate local caregiving resources that fit their individual needs while remaining appropriate and affordable.

This document has been designed as a guide to help parents and other interested parties sort through the various issues involved in selecting and locating child care options. It begins by describing the different factors that each family must consider in selecting care. Next, the various types of care available are described. A discussion of the factors that states typically consider in licensing care facilities follows, as does a list of conditions that families should consider while evaluating care facilities. The document ends with further discussion of the issues that can arise during the family's transition into childcare.
</p>
     <hr>

        <div class="col-lg-4 mb-4">

      </div>

      <h2>Know More About Baby World...</h2>
<hr>
      <div class="row">
          <?php
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['id'];
                $title=$row['title'];
                $img=$row['img'];
                echo '<div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="posts.php?id='.$id.'"><img class="card-img-top" src="'.$img.'" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="posts.php?id='.$id.'">'.$title.'</a>
                    </h4>
                  </div>
                </div>
              </div>';
            }
          ?>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h2>Tips for keeping children healthy</h2>
          <p>Keeping children of all ages safe and healthy is one of the most important tasks of child care providers. Whether children are in center- or home-based care, providers are responsible for ensuring safety both inside and outside their child care setting.

Health and safety are major concerns for child care providers when transporting children. They should be prepared to prevent injuries and illnesses to handle emergencies. The following articles have more specific information and tips for keeping children healthy and safe while they are in child care:
:</p>
          <ul>
            <li>
              Car Safety
            </li>
            <li>Cleaning, Sanitizing, and Disinfecting in Child Care</li>
            <li>Dental Health</li>
            <li>Diapering and Toileting</li>
            <li>First Aid</li>
             <li>Food Safety</li>
              <li>Hand Washing in Child Care</li>
               <li>Medication</li>
                <li>Outdoor Safety</li>
                 <li>Pets in Child Care</li>
                  <li>Preventing Illness</li>
                   <li>Preventing Injuries</li>
                    <li>Sudden Infant Death Syndrome</li>
                     <li>Sunscreen</li>
                      <li>Toy and Equipment Safety</li>
          </ul>

        </div>
      </div>


      <hr>


      <div class="row mb-4">
        <div class="col-md-8">
          <a href="http://www.google.com">Google</a>
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
     <script src="vendor/bootstrap/js/bootstrap.index.js"></script>

  </body>

</html>
