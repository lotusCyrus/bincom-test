

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
 .addButton
 {
     margin:20%;
     justify-content:center;
     text-align:center

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
  <div class="container">
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
                        <a class="nav-link" href="../lga/lga.php"><button type="button" class="btn btn-success btn-md active" >Local Gov</button></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="addresult.php"><button type="button" class="btn btn-success btn-md active" >Add Results</button></a>
                      </li>
          </ul>
   </div>
   </nav>
</div>
<br><br><br><br><br><br>

<div class="container">
    <div class="addButton">
   <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Add Results</button>
   
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                   <div class="modal-header">
                   <h5 class="modal-title " id="exampleModalLongTitle">Polling Results Addition Form</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                   </div>
         <div class="modal-body">
           <form method="post" action="add.php">
            
            <div class="form-group">
            <span>Results Id</span>
            <input type="number" name="resultsId" class="form-control" placeholder="Results Id" required> 
            </div>
            
            <div class="form-group">
            
            <span>Polling Unit UniqueId</span>
            <input type="text" name="uniqueId" class="form-control" placeholder="Polling Unit UniqueId" required> 
            </div>

            <div class="form-group">
            
            <span>Party Abbreviation</span>
            <input type="text" name="partyAbbrv" class="form-control" placeholder="Kindly input Party Abbrv" required> 
            </div>

            <div class="form-group">
            
            <span>Party Score</span>
            <input type="number" name="paryScore" class="form-control" placeholder="Party Score" required> 
            </div>
            
            <div class="form-group">
            
            <span>Name Entered By User</span>
            <input type="text" name="enteredByUser" class="form-control" placeholder="Enter Name" required> 
            </div>


             <div class="form-group">
            
            <span>Date Entered</span>
            <input type="date" name="date" class="form-control" placeholder="Date Entered" required> 
            </div>

            <span>User I.P Address</span>
            <input type="text" name="ipAddress" class="form-control" placeholder="Pls Input IP Address" required> 
            </div>

                               <button class="btn btn-success" type="submit"> Submit</button>

        </div>
        </div>
        </div>
    </div>
</div>

 