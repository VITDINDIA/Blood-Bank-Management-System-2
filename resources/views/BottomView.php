 <section class="py-5">
  <div class="container" >
   <hr/>
<div class="row">
  <div class="col-sm-4">
 <div class="well">  
<bold> <h3>Services</h3></bold>
  <div class="row">
    <?php
  $res=$database->get_all_services();
  while($fetch=mysqli_fetch_array($res))
      {
	  $name=$fetch[1]." ";
      ?>
      <p><?php  echo"$fetch[1]";  ?></p>
		
  <?php
       } 
  ?>   
  </div>
  </div>
  </div> 
  
  
  <div class="col-sm-4">
 <div class="well">
 <strong> <h3>Service Location</h3></strong>
   <?php     $Db_objects->cities();   ?>
   </div>
   </div>
 
 <div class="col-sm-4">
 <div class="well">
 <strong> <h3>Contact Information</h3></strong>
   <p ></p>
   <p >E-mail: abhinav.cse12@gmail.com</p>
 </div>
 </div>
 </div>
        </div>
    </section>