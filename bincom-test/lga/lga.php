

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
    margin:40%;
    height:150px;
    border:5px solid green
}
.nav-item
{
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
                        <a class="nav-link" href="../index.php"><button type="button" class="btn btn-success btn-md active" >Polling Unit</button></a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link" href="lga.php"><button type="button" class="btn btn-success btn-md active" >Local Gov</button></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="../addresults/addresults.php"><button type="button" class="btn btn-success btn-md active" >Add Results</button></a>
                      </li>
          </ul>
   </div>
   </nav>


      <div class="container">
          <select name="course" class="form-select" aria-label="Default select example">
   
        <option selected>Select Polling Unit</option>
                 <?php 
        $con= mysqli_connect('sql111.epizy.com' , 'epiz_33080386' , 'FBN4Q1oA6uVU');
         mysqli_select_db($con, 'epiz_33080386_bitcomtest');
         $select="SELECT* FROM lga";
         $slect="SELECT* FROM polling_unit";

         $allLga=mysqli_query($con, $select);
         $allPollingUnit=mysqli_query($con, $slect);
          while($row=mysqli_fetch_array($allLga, MYSQLI_ASSOC))
         {
            echo " 
                <option id=' $row[uniqueid]'>
     $row[lga_name] $row[uniqueid]'
                </option>
                
             ";
         }
        ?>
        
            
            </select>

      </div>
  </body>