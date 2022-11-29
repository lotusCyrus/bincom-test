<!DOCTYPE html>
<html>
<head>
    <title>Bitcom Test</title>
</head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<style>
select{
    justify-content:center;
    text-align:center;
    margin:30%;
    height:150px;
    border:5px solid green
}

.nav-item
{
    margin:auto;
    padding:auto;
    padding-left:50px;
    text-align:center;
     justify-content:center;
}
ul{
   padding:30px;
   
}
    button
    {
        color:white
    }
 span{
     color:white
 }
table{
    margin:auto;
    justify-content:center;
}
@media screen and (min-width: 768px) {
  .nav-item
{
   
    padding-left:200px;
    text-align:center;
     justify-content:center;
}
}
</style>
  <body>
   <nav class="navbar navbar-expand-md bg-dark  fixed-top">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">Menu</span>
                  </button>

                  
 

                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">

            
                      <li class="nav-item">
                        <a class="nav-link" href="index.php"><button type="button" class="btn btn-success btn-md active" >Polling Unit</button></a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link" href="lga/lga.php"><button type="button" class="btn btn-success btn-md active" >Local Gov</button></a>
                      </li>

                      <li class="nav-item">
                         <a class="nav-link" href="addresults/addresults.php"><button type="button" class="btn btn-success btn-md active" >Add Results</button></a>
                      </li>
          </ul>
   </div>
   </nav>

<br><br><br><br><br><br>
      <div class="container">
        <table  class="table table-hover table-responsive table-md">
       <thead class="table-success">
         <tr>
    
            <th>Result Id</th>
            <th>P.U.uniqueid</th>
            <th>Party Abbrv</th>
            <th>Party Score</th>
            <th >User Entry</th>
            <th>Date Entry</th>
           <!-- <th>Address</th>
            <th></th>
            <th>Marital status</th>
            <th>Invitation medium</th>
            <th>Membership status</th>
            <th>Occupation</th>-->
            <th>User I.P address</th>
         
         </tr>
    </thead>
    <tbody>
                 <?php 
        $con= mysqli_connect('sql111.epizy.com' , 'epiz_33080386' , 'FBN4Q1oA6uVU');
         mysqli_select_db($con, 'epiz_33080386_bitcomtest');
         $select="SELECT* FROM lga";
         $slect="SELECT* FROM announced_pu_results";

         $allLga=mysqli_query($con, $select);
         $allPollingResult=mysqli_query($con, $slect);
          while($row=mysqli_fetch_array($allPollingResult, MYSQLI_ASSOC))
         {
            echo " <tr>
                      <td>$row[result_id]</td>
                      <td>$row[polling_unit_uniqueid]</td>
                      <td>$row[party_abbreviation]</td>
                       <td>$row[party_score]</td>
                       <td>$row[entered_by_user]</td>
                        <td>$row[date_entered]</td>
                        <td>$row[user_ip_address]</td>

                  </tr>
             ";
         }
        ?>
        
            
    </tbody>
    </table>
      </div>
  </body>