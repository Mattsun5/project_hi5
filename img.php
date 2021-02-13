<?php 
      $ext = $_POST['id'];
   // {
      // $ext = "1.jpg";
      $dir_name = "img/gallery_img/";
      // $images = glob($dir_name."*.jpg");
      // foreach($images as $image) {
         echo '<img src="'.$dir_name.$ext.'" width="95.4%" /><h3>click on tabs to preview images from Hand to do</h3>';
      // }
      // echo ;
   // }
   



//    <!-- // The JavaScript Code Required to Perform Ajax Requests (xmlhttp.js)
// //xmlhttp.js
// //Function to create an XMLHttp Object.
// function getxmlhttp (){
// //Create a boolean variable to check for a valid Microsoft ActiveX instance.
// var xmlhttp = false;
// //Check if we are using Internet Explorer.
// try {
// //If the JavaScript version is greater than 5.
// xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
// } catch (e) {
// //If not, then use the older ActiveX object.
// try {
// //If we are using Internet Explorer.
// xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
// } catch (E) {
// //Else we must be using a non-Internet Explorer browser.
// xmlhttp = false;
// }
// }
// // If we are not using IE, create a JavaScript instance of the object.
// if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
// xmlhttp = new XMLHttpRequest();
// }
// return xmlhttp;
// }
// //Function to process an XMLHttpRequest.
// function processajax (obj, serverPage){
// //Get an XMLHttpRequest object for use.
// var theimg;
// xmlhttp = getxmlhttp ();
// xmlhttp.open("GET", serverPage);
// xmlhttp.onreadystatechange = function() {
// if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
// document.getElementById(obj).innerHTML = xmlhttp.responseText;
// }
// }
// xmlhttp.send(null);
// }


// // The JavaScript Code Required to Load in the Uploaded Image (functions.js)
// //functions.js
// //Function to determine when the process_upload.php file has finished executing.
// function doneloading(theframe,thefile){
// var theloc = "showimg.php?thefile=" + thefile
// theframe.processajax ("showimg",theloc);
// }


// The PHP Code Required to Show the Passed-In Image File Name (showimg.php) -->
// <?php
// //showimg.php
// $file = $_GET['thefile'];
// //Check to see if the image exists.
// if (!is_file($file) || !file_exists($file))
// exit;
// ?>
<!-- // <img src="" alt="" /> -->
                                
 <!-- ?> -->




