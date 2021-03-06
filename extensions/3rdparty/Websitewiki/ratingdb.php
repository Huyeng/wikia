<?php
/*
Page:           db.php
Created:        Aug 2006
Last Mod:       Mar 11 2007
This page handles the database update if the user
does NOT have Javascript enabled.	
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
--------------------------------------------------------- */

class RatingDB extends UnlistedSpecialPage {



	function execute( $par ) {

//getting the values
$vote_sent = preg_replace("/[^0-9]/","",$_REQUEST['j']);
$id_sent = preg_replace("/[^0-9a-z-.]/","",$_REQUEST['q']);
$ip_num = preg_replace("/[^0-9.]/","",$_REQUEST['t']);
// $units = preg_replace("/[^0-9]/","",$_REQUEST['c']);
$units = 5;
$ip = $_SERVER['REMOTE_ADDR'];
$referer  = $_SERVER['HTTP_REFERER'];

/******
if(!stristr($referer,"http://www.websitewiki.de/"))
{
  // header("Location: http://www.websitewiki.de/votehackbig.png?random=".rand());
   header("Location: http://www.websitewiki.de/abstimmproblem.php?random=".rand());
  exit;
}
*******/


//connecting to the database to get some information

$dbr = wfGetDB( DB_SLAVE );

$res = $dbr->query("SELECT total_votes, total_value, used_ips FROM $ratingTable WHERE id='$id_sent' ");
$numbers = mysql_fetch_assoc($query);
$checkIP = unserialize($numbers['used_ips']);

if(!is_array($checkIP) || (is_array($checkIP) && !in_array($ip_num, $checkIP)))
{
  $count = $numbers['total_votes']; //how many votes total
  $current_rating = $numbers['total_value']; //total number of rating added together and stored
  $sum = $vote_sent+$current_rating; // add together the current vote value and the total vote value

  // checking to see if the first vote has been tallied
  // or increment the current number of votes
  ($sum==0 ? $added=0 : $added=$count+1);

  // if it is an array i.e. already has entries the push in another value
  ((is_array($checkIP)) ? array_push($checkIP,$ip_num) : $checkIP=array($ip_num));
  $insertip=serialize($checkIP);

  // keep votes within range
  if (($vote_sent >= 1 && $vote_sent <= $units) && ($ip == $ip_num)) 
  { 
	$dbw = wfGetDB( DB_MASTER );

	  $update = $dbr->query( "UPDATE $ratingTable SET total_votes='".$added."', total_value='".$sum."', used_ips='".$insertip."' WHERE id='$id_sent'" );
  } 
}
header("Location: $referer"); // go back to the page we came from 
exit;

}

}
