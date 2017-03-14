<?php

//      Name: Michael Shohdy 	 
//   	Course: 443
//   	Assignment: #4
 
header("Content-type: image/png");

//IMAGE
$image=imagecreatetruecolor(800,300);
//_____________________colors____________________________
//BACKGROUND
$grey       = imagecolorallocate($image,188,186,204);
//RECTANGLES
$blue       = imagecolorallocate($image, 25, 25,112);
//LETTERS
$black      = imagecolorallocate($image,  0,  0,  0);
//DISKS
$red        = imagecolorallocate($image,255,  0,  0);
$yellow     = imagecolorallocate($image,255,215,  0);
$green      = imagecolorallocate($image,127,255,  0);
//_______________________________________________________
//BACKGROUND
imagefill($image,0,0,$grey);

//imagefilledarc($image, 207,230,  80, 40,  0, 360, $red   , IMG_ARC_PIE);
//imagefilledarc($image, 207,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
//imagefilledarc($image, 207,210, 180, 80,  0, 360, $green , IMG_ARC_PIE); 
//___________________________________________________________________

/* A=0,1,2&B=&C= 
$_GET["A"]="0,1,2"
$_GET["B"]=""
$_GET["C"]=""
*/

//DISKS
//__________________ , center,   w , h , st, end, clr    , type______
// centers will change dynamically based on $_GET[] 
//disk A all possible 7 combos
if    (strpos($_GET["A"],"0,1,2") !== false){
	imagefilledarc($image, 207,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 207,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
	imagefilledarc($image, 207,100,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["A"],"1,2") !== false){
	imagefilledarc($image, 207,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 207,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);}
elseif(strpos($_GET["A"],"0,2") !== false){
	imagefilledarc($image, 207,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 207,150,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["A"],"0,1") !== false){
	imagefilledarc($image, 207,220, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
	imagefilledarc($image, 207,170,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}	
elseif(strpos($_GET["A"],"2") !== false){
	imagefilledarc($image, 207,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);}
elseif(strpos($_GET["A"],"1") !== false){
	imagefilledarc($image, 207,220, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);}
elseif(strpos($_GET["A"],"0") !== false){
	imagefilledarc($image, 207,230,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
//disk B all possible 7 combos
if    (strpos($_GET["B"],"0,1,2") !== false){
	imagefilledarc($image, 407,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 407,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
	imagefilledarc($image, 407,100,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["B"],"1,2") !== false){
	imagefilledarc($image, 407,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 407,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);}
elseif(strpos($_GET["B"],"0,2") !== false){
	imagefilledarc($image, 407,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 407,150,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["B"],"0,1") !== false){
	imagefilledarc($image, 407,220, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
	imagefilledarc($image, 407,170,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}	
elseif(strpos($_GET["B"],"2") !== false){
	imagefilledarc($image, 407,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);}
elseif(strpos($_GET["B"],"1") !== false){
	imagefilledarc($image, 407,220, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);}
elseif(strpos($_GET["B"],"0") !== false){
	imagefilledarc($image, 407,230,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
//disk C all possible 7 combos
if    (strpos($_GET["C"],"0,1,2") !== false){
	imagefilledarc($image, 607,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 607,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
	imagefilledarc($image, 607,100,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["C"],"1,2") !== false){
	imagefilledarc($image, 607,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 607,145, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);}
elseif(strpos($_GET["C"],"0,2") !== false){
	imagefilledarc($image, 607,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);
	imagefilledarc($image, 607,150,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["C"],"0,1") !== false){
	imagefilledarc($image, 607,220, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);
	imagefilledarc($image, 607,170,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}
elseif(strpos($_GET["C"],"2") !== false){
	imagefilledarc($image, 607,210, 180, 80,  0, 360, $green , IMG_ARC_PIE);}
elseif(strpos($_GET["C"],"1") !== false){
	imagefilledarc($image, 607,220, 130, 60,  0, 360, $yellow, IMG_ARC_PIE);}
elseif(strpos($_GET["C"],"0") !== false){
	imagefilledarc($image, 607,230,  80, 40,  0, 360, $red   , IMG_ARC_PIE);}

//LETTERS
imagestring($image,5,203,15,"A",$black);
imagestring($image,5,403,15,"B",$black);
imagestring($image,5,603,15,"C",$black);
//RECTANGLES
imagefilledrectangle($image, 50,250,750,265,$blue); //base
imagefilledrectangle($image,200, 50,215,265,$blue); //A
imagefilledrectangle($image,400, 50,415,265,$blue); //B
imagefilledrectangle($image,600, 50,615,265,$blue); //C

imagepng($image);
imagedestroy($image);
?>