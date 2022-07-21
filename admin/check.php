<?php
include("_includes/config.php");
 session_start();
 if(!isset($_SESSION['id'])){
     header("location:index.php");
 }?>
<?php
if(isset($_POST['dnk'])){
  $query=mysqli_query($conn,"select * from property where id='".$_POST['dnk']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="building_name" name="building_name" type="text" value="'.$row['building_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

    <div class="row">
              <div class="col-md-12">
        <div class="form-group">
          <label for="clock_in">
          flat <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control" placeholder="flat" name="flat" type="text" value="'.$row['flat'].'"  data-dtp="dtp_qHHzf">
            
          </div>
        </div>
      </div>
              
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Build-up Area   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="built-up area" name="builtup_area" type="text" value="'.$row['builtup_area'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>
  
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  carpet Area <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" placeholder="carpet_area" name="carpet_area" type="text" value="'.$row['carpet_area'].'" data-dtp="dtp_dl6pL">
    
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
property  <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="property" name="property" type="text" value="'.$row['property'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>

</div>
</div>

  </div>
</div>
';
}


?>


<?php
if(isset($_POST['dnkk'])){
  $query=mysqli_query($conn,"select * from property where id='".$_POST['dnkk']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="building_name" name="building_name" type="text" value="'.$row['building_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

    <div class="row">
              <div class="col-md-12">
        <div class="form-group">
          <label for="clock_in">
          flat   <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control" placeholder="flat" name="flat" type="text" value="'.$row['flat'].'"  data-dtp="dtp_qHHzf">
            
          </div>
        </div>
      </div>
              
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Build-up Area   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="built-up area" name="builtup_area" type="text" value="'.$row['builtup_area'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>
  
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  carpet Area <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" placeholder="carpet_area" name="carpet_area" type="text" value="'.$row['carpet_area'].'" data-dtp="dtp_dl6pL">
    
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
property  <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="property" name="property" type="text" value="'.$row['property'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>

</div>
</div>

  </div>
</div>
';
}


?>


<?php
if(isset($_POST['dnk1'])){
  $query=mysqli_query($conn,"select * from property where id='".$_POST['dnk1']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="building_name" name="building_name" type="text" value="'.$row['building_name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

    <div class="row">
              <div class="col-md-12">
        <div class="form-group">
          <label for="clock_in">
          flat   <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control" placeholder="flat" name="flat" type="text" value="'.$row['flat'].'"  data-dtp="dtp_qHHzf">
            
          </div>
        </div>
      </div>
              
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Location <span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <input class="form-control" placeholder="Location" name="location" type="text" value="'.$row['location'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Build-up Area   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="built-up area" name="builtup_area" type="text" value="'.$row['builtup_area'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>
  
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  carpet Area <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" placeholder="carpet_area" name="carpet_area" type="text" value="'.$row['carpet_area'].'" data-dtp="dtp_dl6pL">
    
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
property  <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" placeholder="property" name="property" type="text" value="'.$row['property'].'"  data-dtp="dtp_qHHzf">

</div>
</div>
</div>

</div>
</div>

  </div>
</div>
';
}


?>




<?php
if(isset($_POST['dnk2'])){
  $query=mysqli_query($conn,"select * from partners where id='".$_POST['dnk2']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>

 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
';
}


?>



<?php
if(isset($_POST['dnk3'])){
  $query=mysqli_query($conn,"select * from testimonials where id='".$_POST['dnk3']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
      Building Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="propertyid" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  Description <span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
    <textarea class="form-control" placeholder="Description" name="description">'.$row['description'].'</textarea>
    
  </div>
</div>
</div>
</div>
 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
';
}


?>