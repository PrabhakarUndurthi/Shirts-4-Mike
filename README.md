Shirts 4 Mike is an e-commerce Tea shirt store


Welcome to Shirts 4 Mike

Description :
   Shirts 4 mike is an e-commerce online shopping application , built with PHP. integrated with PayPal.
   This application allows the users to buy their favorite tea shirts available on the site. Currently this application is only
   ment to sell Tea shirts alone. This application allows the  customers to purchage their favorite tea shirts in different sizes.
   Upon the successful shopping , customers will be redirected to the PayPal for the  secure payment transaction
The customer support  Contact model is evaluated with phpmailer.
   
   
   
   


Installation : 

This web application was built under windows  platform:
 
 1) Download the xampp server from the open source platform
 http://www.apachefriends.org/en/xampp.html
 
 2) Install the Sublime tex editor (Optional, but recommended.)
 
 http://www.sublimetext.com/
 
 3)Install the xammp server, a directory will be created under C:\xampp\htdocs.
 
 4) Go to this direcotry
 C:\xampp\htdocs.
 
 5) All your files are saved in this directory.
 
 START WRITING CODE FROM HERE.
 
 6) Open the xampp file on the computer and start the server. The server would actually listen on localhost 8080.
 the ports are 80,443. 
 NOTE: Incase if your  80,443 ports are busy ! please go to your skype and change there. Generally this ports are commonly used
 by the skype on the windows system.
 
 
 6) Once it is done start the server.
 
 
 7) Create your PayPal Business account and set up your website information .
 
 8) Go to Your PayPal account and /myselling tools add the buttons to the site. 
 NOTE: Carefully handle this part.(PayPal)
 
 9) Keep pushing your code to Github.
 
 
 
 
 
 
 
 Description of contents.
 
 This is the final project structure :
 
 
| --htdocs
|   |--contact
| --|  |--index.php
      --
      
| --|--css
| --|  |--style.css
    ---
    
| --|--img
| --|  |--shirts
| --|     |--shirt-101.jpg
| --|     |--shirt-102.jpg
| --|     |--shirt-103.jpg
| --|     |--shirt-104.jpg
| --|     |--shirt-105.jpg
| --|     |--shirt-106.jpg
| --|     |--shirt-107.jpg
| --|     |--shirt-108.jpg
| --|     |--shirt-109.jpg
| --|     |--shirt-110.jpg
| --|     |--shirt-111.jpg
| --|     |--shirt-121.jpg
| --|     |--shirt-113.jpg
| --|     |--shirt-114.jpg
| --|     |--shirt-115.jpg
| --|     |--shirt-116.jpg
| --|     |--shirt-117.jpg
| --|     |--shirt-118.jpg
| --|     |--shirt-119.jpg
| --|     |--shirt-120.jpg
| --|     |--shirt-121.jpg
| --|     |--shirt-122.jpg
| --|     |--shirt-123.jpg
| --|     |--shirt-124.jpg
| --|     |--shirt-125.jpg
| --|     |--shirt-126.jpg
| --|     |--shirt-127.jpg
| --|     |--shirt-128.jpg
| --|     |--shirt-129.jpg
| --|     |--shirt-130.jpg
| --|     |--shirt-131.jpg
| --|     |--shirt-132.jpg
| --|     |--banner-background.jpg
| --|     |--banner-link-arrow.jpg
| --|     |--branding-title.png
| --|     |--logo-paypal-classic.png
| --|     |--logo-paypal.png
| --|     |--mike-the-frog.png
| --|     |--nav-sprite.png
        ---
        
        
        
| --|--inc
| --|  |--phpmailer
| --|     |--class.phpmailer.php
| --|   --|--config.php
| --|   --|--footer.php
| --|   --|--header.php
| --|   --|--partial-list-navigation.html.php
| --|   --|--partial-product-list-view.html.php
| --|   --|--products.php

        ---
        
        
| --|--receipt
| --|   |--index.php
| --|--search
| --|   |--index.php
| --|--shirts
| --|   |--shirt.php
| --|   |--shirts.php
| --|-- |--.htaceess
| --| --|--config.php
| --| --|--favicon.ico
| --| --|--index.php
| --| --|--.htaceess



  htdocs 
  
  Holds all the specific files related to the project.
  
  htdocs/contact

  Contains all the code related to the contact model.This file also contains specific files
  related to the customer feedback.

  htdocs/css

  This file holds all the CSS code to handle the front-end design.

  htdocs/img
  
  Holds all the image files related to the project both front-end/back-end.

  htdocs/inc

   It contains  some important files related to the products.
   NOTE: Handle carefully ,because it contains PayPal code and configurations.

   htdocs/receipt

   It holds the code which gives back a nice little replay to the customer, after successful shopping.

   htdocs/search

   Holds the file related to the search functionality on the site.

   htdocs/shirts


   Holds the files related to the shirts,configuration and home page of the site.

 
