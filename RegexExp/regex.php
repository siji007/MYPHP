<?php

$name = $_POST['fullname'];
$matric = $_POST['matric'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$password = $_POST['pass'];


if(isset($_POST['regex'])){
  if(!preg_match("/12/",$address)){
  echo "Error 12 not included";
  exit();
  }
}

?>




<!-- note
 "i" it means it is case insensitive
 "g" it looks for matches without it ,it will only return the first match
"\s" means space, "\d" olso means digit! (!preg_match("/\s\d/",$address));
"\D" MEANS NON DIGITS!
"\d" means digit!
"/\p{L}/" this denote any letter in any language
"/\p{P}/" will check for punctuations!
"/\p{Sc}/" this will check for currency
"/^$/" the anchor tag checks from the beginning of the text and the $ checks to the the asend of
"/m" This enables search for multiline

"\n" this is used when will need a \n in the result

//Special Characters!!!!

"\." Check if there is a dot!
"/\\/" Use to check if there is a backslash so you will double the slashes



 -->
