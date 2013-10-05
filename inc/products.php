<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";
    // Showing the details of individual shirt , from the shirts collectoin.

    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}


//Entries for the each shirt listed in the shirts collection ,along with thier valid Paypal buttons.
$products = array();
$products[101] = array(
  "name" => "Logo Shirt, Red",
  "img" => "img/shirts/shirt-101.jpg",
  "price" => 18 ,
  "paypal" => " KZ7T9P3XA6S2U",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[102] = array(
  "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => " 7KWUWBWMJTV8W",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);

$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "  8JERU7JJMKFJU",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => " 8QDHHELGRKUY ",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
    
    );
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "2FD9NTKWXKBPU  ",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal"=> "  SG6X8XKG8SUPN",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => " N7R2XN5XCWA8L",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal " =>" SHHUH7W6PVSGN ",
  "sizes" => array("Small", "Medium", "Large", "X-Large")
);
?>
