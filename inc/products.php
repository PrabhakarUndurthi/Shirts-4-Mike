<?php

/*
 * Returns the four most recent products, using the order of the elements in the array
 * @return   array           a list of the last four products in the array;
                             the most recent product is the last one in the array
 */
function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;
    
    foreach($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
}

/*
 * Loops through all the products, looking for a search term in the product names
 * @param    string    $s    the search term
 * @return   array           a list of the products that contain the search term in their name
 */
function get_products_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["name"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

/*
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
    return count(get_products_all());
}

/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */
function get_products_all() {

$products = array();
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"img" => "img/shirts/shirt-101.jpg",
	"price" => 18,
	"paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "paypal" => "SXKPTHN2EES3J",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "paypal" => "7T8LK5WXT5Q9J",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "paypal" => "4CLP2SCVYM288",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "paypal" => "TNAZ2RGYYJ396",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[107] = array(
    "name" => "Logo Shirt, Teal",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "paypal" => "S5FMPJN6Y2C32",
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[108] = array(
    "name" => "Mike the Frog Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "paypal" => "JMFK7P7VEHS44",
    "sizes" => array("Large","X-Large")
);
$products[109] = array(
            "name" => "Get Coding Shirt, Gray",
            "img" => "img/shirts/shirt-109.jpg",    
            "price" => 20,
            "paypal" => "8PG4L4RQ5HZSJ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[110] = array(
            "name" => "HTML5 Shirt, Orange",
            "img" => "img/shirts/shirt-110.jpg",    
            "price" => 22,
            "paypal" => "CGBCC3AXY5JF6",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[111] = array(
            "name" => "CSS3 Shirt, Gray",
            "img" => "img/shirts/shirt-111.jpg",    
            "price" => 22,
            "paypal" => "JW7UH4KMKSVYG",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[112] = array(
            "name" => "HTML5 Shirt, Blue",
            "img" => "img/shirts/shirt-112.jpg",    
            "price" => 22,
            "paypal" => "2TY5E5XPV4GNJ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[113] = array(
            "name" => "CSS3 Shirt, Black",
            "img" => "img/shirts/shirt-113.jpg",    
            "price" => 22,
            "paypal" => "RD4ANKW823TGE ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[114] = array(
            "name" => "PHP Shirt, Yellow",
            "img" => "img/shirts/shirt-114.jpg",    
            "price" => 24,
            "paypal" => "8CP8J5JN43FZC",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[115] = array(
            "name" => "PHP Shirt, Purple",
            "img" => "img/shirts/shirt-115.jpg",    
            "price" => 24,
            "paypal" => "49KNHBP2FFCFN",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[116] = array(
            "name" => "PHP Shirt, Green",
            "img" => "img/shirts/shirt-116.jpg",    
            "price" => 24,
            "paypal" => "W3VUWASWKGVF2",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[117] = array(
            "name" => "Get Coding Shirt, Red",
            "img" => "img/shirts/shirt-117.jpg",    
            "price" => 20,
            "paypal" => "M3GKS97MBLUWJ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[118] = array(
            "name" => "Mike the Frog Shirt, Purple",
            "img" => "img/shirts/shirt-118.jpg",    
            "price" => 25,
            "paypal" => "595Q4RFWTF37A",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[119] = array(
            "name" => "CSS3 Shirt, Purple",
            "img" => "img/shirts/shirt-119.jpg",    
            "price" => 22,
            "paypal" => "VCRJXMMTFLRW4",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[120] = array(
            "name" => "HTML5 Shirt, Red",
            "img" => "img/shirts/shirt-120.jpg",    
            "price" => 22,
            "paypal" => "PSHUYVRS2R9T4",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[121] = array(
            "name" => "Get Coding Shirt, Blue",
            "img" => "img/shirts/shirt-121.jpg",    
            "price" => 20,
            "paypal" => "WWYS4B9DGG4CQ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[122] = array(
            "name" => "PHP Shirt, Gray",
            "img" => "img/shirts/shirt-122.jpg",    
            "price" => 24,
            "paypal" => "T84J73AXZ89DU",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[123] = array(
            "name" => "Mike the Frog Shirt, Green",
            "img" => "img/shirts/shirt-123.jpg",    
            "price" => 25,
            "paypal" => "UT6M895FWUJQU",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[124] = array(
            "name" => "Logo Shirt, Yellow",
            "img" => "img/shirts/shirt-124.jpg",    
            "price" => 20,
            "paypal" => "MZ6YXMCA64CYE",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[125] = array(
            "name" => "CSS3 Shirt, Blue",
            "img" => "img/shirts/shirt-125.jpg",    
            "price" => 22,
            "paypal" => "M627TJVYUTZS6",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[126] = array(
            "name" => "Doctype Shirt, Green",
            "img" => "img/shirts/shirt-126.jpg",    
            "price" => 25,
            "paypal" => "KRS2GWEB9S34A",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[127] = array(
            "name" => "Logo Shirt, Purple",
            "img" => "img/shirts/shirt-127.jpg",    
            "price" => 20,
            "paypal" => "GLWLBYDWSF3KN",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[128] = array(
            "name" => "Doctype Shirt, Purple",
            "img" => "img/shirts/shirt-128.jpg",    
            "price" => 25,
            "paypal" => "5TYXD3SHST34Q",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[129] = array(
            "name" => "Get Coding Shirt, Green",
            "img" => "img/shirts/shirt-129.jpg",    
            "price" => 20,
            "paypal" => "LZC5X9DA6U6UJ",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[130] = array(
            "name" => "HTML5 Shirt, Teal",
            "img" => "img/shirts/shirt-130.jpg",    
            "price" => 22,
            "paypal" => "A8FXBGMXP9PFY",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[131] = array(
            "name" => "Logo Shirt, Orange",
            "img" => "img/shirts/shirt-131.jpg",    
            "price" => 20,
            "paypal" => "B4DE2MVAHYFUA",
            "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[132] = array(
            "name" => "Mike the Frog Shirt, Red",
            "img" => "img/shirts/shirt-132.jpg",    
            "price" => 25,
            "paypal" => "RV8GU5NFU6QAA",
            "sizes" => array("Small","Medium","Large","X-Large")
    );


// when creating a new product, create it first in PayPal and
    // then copy the product ID from PayPal to use here     

    // automated duplication to copy the product_id/sku from the array key
    // and duplicate it into the product details inside the array
    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }

    return $products;
}

?>