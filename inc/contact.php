<?php  

$pageTitle = "Contact Mike" ;
$section = "contact";
include ('inc/header.php'); ?>


<div class = "section page">
	<div calss= "wrapper">

	   <h1>Contact</h1>
	    <p> I&rsquo; d love to hear from you! Complete the form to send me an email.</p>
	    <form method= "post"  action= "contact.php">
	    	<table>
	    		<tr>
	    		  <th>
	                 <lable for= "name"> Name </lable>
	          </th>
	          <td>
	              <input type=  "text" name= "name" id "name" >
	           </td>
	        </tr>
	        <tr>
	    	    <th>
	                 <lable for= "name"> Email </lable>
	             </th>
	              <td>
	                <input type=  "text" name= "email " id "email " >
	            </td>
	         </tr>
	          <tr>
	    	      <th>
	                  <lable for= "name"> Message </lable>
	          </th>
	          <td>
	               <textarea name=  "message"  id "message"> </textarea>
	           </td>
	         </tr>
	     </table>
	     <input type= "submit" value = "send">
	  </form>

    </div>  
  </div>
 <?php include ('inc/footer.php'); ?> 