<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
<?php  include 'links.php' ?>
</head>
<body>
<form method="POST">
  
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="n_" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">degree</label>
    <input type="text" class="form-control" name="degree" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">mobile</label>
    <input type="number" class="form-control"  name="mobile" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">refer</label>
    <input type="text" class="form-control"  name="refer" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">post</label>
    <input type="text" class="form-control"  name="post" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){

$n=$_POST['n_'];
$degree=$_POST['degree'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$refer=$_POST['refer'];
$post=$_POST['post'];
$insert_="insert into job_reg(name,degree,mobile,email,refer,post) values('$n','$degree','$mobile','$email','$refer','$post')";
$res=mysqli_query($con,$insert_);
if($res){
    ?>
    <script>
        alert("data inserted");
        </script>
        <?php
}else{
    ?>
<script>
        alert("data not inserted");
        </script>
     <?php
}
}
?>