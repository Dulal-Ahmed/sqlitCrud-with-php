<?php
	//include our connection
	include 'dbconfig.php';
 
	//get the row of selected id
	$sql = "SELECT rowid, * FROM products WHERE rowid = '".$_GET['id']."'";
	$query = $db->query($sql);
	$row = $query->fetchArray();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zouto</title>

    <!-- Favicon -->
    <link rel="icon" href="" type="image/png" sizes="16x16">

    <!-- Bootstrap 5 CDN Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <!-- Fontawesome - for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />

    <!-- Montserrat - Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet linking -->
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">E-Shop</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Tarif</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="">Voir plus</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link nav-link-2" href="">Ma liste D’achats
                        <img src="images/bag.png" class="basket position-relative" alt="">
                        <span class="circle position-absolute start-25 border rounded-circle">
                          <span class="num">5</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Section -->
<main class="main">
    <div class="container">

        <!-- Retour Block -->
        <div class="retour">
            <a href=""><img src="images/arrow-left.png" alt="">&nbsp;Retour</a>
        </div>

        <h3 class="heading">Ma liste d’achats</h3>

        <div class="steps-div">
            <div class="active">
                <p>1. Votre panier Zouto List</p>
            </div>
            <div class="two">
                <p>2. Tarifs</p>
            </div>
            <div class="two">
                <p>3. Paiement</p>
            </div>
        </div>

        <div class="row" onclick="detectevent()" >
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="left-block">

               <form method="POST" >  
                    <!--top input  Box -->
                    <div class="box">
                   
                        <div class="image">
                           <input type="checkbox" class="check-2">
                            <div class="img-box imageparentDiv">
                               
                              
                                <!--  Image upload -->
                  
                            </div>
                        </div>
                        <div class="description">
                            <div class="d-1">
                                <div>
                                    <!--  Prodduct link  -->
                                   <input type="text"  name="productlink" value="<?php echo $row['productlink']; ?>" style="border-radius: 8px;">
                                </div>
                                <div>
                                    <!-- <a href="">Edit</a> -->
                            </div>

                            <h5><input type="text" name="productname" value="<?php echo $row['productname']; ?>" style="margin-top: 10px; border-radius: 8px;" ></h5>

                            <div class="points">
                                <div>
                                    <p class="pp-1">Quantité <br><input type="number" name="quantite" value="<?php echo $row['quantite']; ?>" style="width: 80px; border-radius: 8px;"></p>
                                </div>
                                <div>
                                    <p class="pp-1">Prix <br> <input type="number" name="price" value="<?php echo $row['price']; ?>" style="width: 80px; border-radius: 8px;"></p>
                                </div>
                                <div>
                                    <p class="pp-1">Size <br><input type="text" name="size" value="<?php echo $row['size']; ?>" style="width: 80px; border-radius: 8px;"></p>
                                </div>
                                <div>
                                    <p class="pp-1">Color <br> <input type="text" name="color" value="<?php echo $row['color']; ?>" style="width: 80px; border-radius: 8px;"></p>
                                </div>
                            </div>
                        </div>
                  
                  
                    </div>

                    <div class="top">
                        <div>
                            <label for="check">Tout sélectionner</label>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <!--  Add button  -->
                            <button type="button" class="btn add-btn addBox" ><img src="images/add.png" alt="">&nbsp;&nbsp;&nbsp;<input type="submit" name="save" value="Ajouter un produit" style="outline: none; border: none; background: transparent; color: white;"></button>&nbsp;
                       
                                                       
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
      </main>

 <?php
	if(isset($_POST['save'])){
		$productlink = $_POST['productlink'];
		$productname = $_POST['productname'];
		$quantite = $_POST['quantite'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$color = $_POST['color'];
 
		//update our table
		$sql = "UPDATE products SET productlink = '$productlink', productname = '$productname', quantite = '$quantite', price = '$price', size = '$size', color = '$color' WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);
 
        echo "<script>window.location='index.php'</script>";
	}
?>
    </body>
  </html>
                