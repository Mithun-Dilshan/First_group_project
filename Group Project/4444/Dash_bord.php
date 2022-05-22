
<!DOCTYPE html>
<html>
<head>
<style>






    
   
</style>
<link rel="stylesheet" type="text/css" href="Admin.css">
<script src="https://kit.fontawesome.com/88d81e3dd6.js" crossorigin="anonymous"></script>

</head>


<body>
  


<div class="nav_admi">
             <ul class="admi_ul">
           <li><a href="Dash_bord.php">Dash bord </a></li> 
           <li> <a href="Customer.php">customer  </a>   </li>
           <li> <a href="seller.php"> seller</a>   </li>
           <li> <a href="Land.php"> Land</a>   </li>
           <li> <a href="land manager.php"> land maneger</a>   </li>
           <li> <a href="credit officer.php"> credit officer</a>   </li>
           <li> <a href="Loan.php"> Loan</a>   </li>
           
</ul>
</div>
<br>
<br>
        





        <?php 
       include("conect.php");
     

        ?>
        <div class="logout">
        <form action="logout.php" method="POST"> 
      <button type="submit" name="logout_btn" class="btn btn-primary">Logout<i class="fa-solid fa-right-from-bracket"></i></button>
      </form>
</div>

      
     

 <div class="anlys1">
   <h1> System Grow </h1>
 <div class="card">
  <h1><?php 
            $sql = "SELECT COUNT(*) AS total from Customer";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
            echo $data['total']; ?>
            
            </h1>
            <h2>Customers</h2>


 </div>

 <div class="card">
  <h1><?php 
            $sql = "SELECT COUNT(*) AS total from seller";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
            echo $data['total']; ?>
            
            </h1>
            <h2>Sellers</h2>


 </div>

 <div class="card">
  <h1><?php 
            $sql = "SELECT COUNT(*) AS total from land";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
            echo $data['total']; ?>
            
            </h1>
            <h2>Lands</h2>


 </div>


 <div class="card">
  <h1><?php 
            $sql = "SELECT COUNT(*) AS total from loan";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
            echo $data['total']; ?>
            
            </h1>
            <h2>Loan </h2>


 </div>


</div>
<div class="anlys2">
<h1> System employes </h1>

<div class="card2">
  <h1><?php 
            $sql = "SELECT COUNT(*) AS total from land_manager";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
            echo $data['total']; ?>
            
            </h1>
            <h2>Land managers </h2>


 </div>


 <div class="card2">
  <h1><?php 
            $sql = "SELECT COUNT(*) AS total from creadit_officer";
            $result = $conn->query($sql);
            $data =  $result->fetch_assoc();
            echo $data['total']; ?>
            
            </h1>
            <h2>creadit officer </h2>


 </div>


</div>






          
