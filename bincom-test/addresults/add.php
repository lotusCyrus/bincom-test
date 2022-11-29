<?php
 
 session_start();
 //header('location:login.php');
    $con= mysqli_connect('sql111.epizy.com' , 'epiz_33080386' , 'FBN4Q1oA6uVU');
    mysqli_select_db($con, 'epiz_33080386_bitcomtest');

 $resultsId= $_POST['resultsId'];
 
 $uniqueId= $_POST['uniqueId'];
 
 $partyAbbrv= $_POST['partyAbbrv'];
 
  $partyScore= $_POST['partyScore'];
 
  $enteredByUser=$_POST['enteredByUser'];

   $date= $_POST['date'];


   
    $ipAddress= $_POST['ipAddress'];

 $s= "SELECT* FROM announced_pu_results WHERE user_ip_address='$ipAdress' ";
 $result= mysqli_query($con , $s);
 $numb= mysqli_num_rows($result);
 
 if($numb==1)
 {
   echo   " <a style='justify:center; font-size:100px'
   href='addresults.php'><<< RETURN </a>
   <script>alert('Sorry, But you added results already !')</script>";
 }
 else {  
   $reg =" insert into announced_pu_results(result_id , polling_unit_uniqueid , party_abbreviation, party_score, entered_by_user , date_entered, user_ip_address) values ('$resultsId' , '$uniqueId' , '$partyAbbrv', '$partyScore','$enteredByUser', '$date', '$ipAddress')";
   mysqli_query($con , $reg);
   echo   " <a style='justify:center; font-size:100px'
   href='addresults.php'><<< RETURN </a>
   <script>alert('You added results successfully !')</script>";
 }
 ?>