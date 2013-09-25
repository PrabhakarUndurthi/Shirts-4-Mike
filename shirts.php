<?php 
// creating  an array which holds the collection of shirts in the shirts moduel.
$products[101] = "Logo Shirt , Red";
$products [102] = "Mike the Frog, Black";
$products [103] = "Mike the Frog Shirt, BLue";
$products[104] = "Logo Shirt, Green";

?><?php

$pageTitle = "Mike's Full Catalog Of Shirts";
$section  = "shirts";
include ('inc/header.php'); ?>

      <div class= "section page">
      	<div class= "wrapper">
           <h1> Mike&rsquo; s Full Catalog Of Shirts</h1>
      </div>
      
      <ul>
      	<?php  foreach ($products as $product) { ?>
      	<li><?php echo $product; ?> </li>
      	<?php } ?>

      </ul>
  </div>


<?php include ('inc/footer.php'); ?>      