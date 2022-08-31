<?php
session_start();
?>
<?php 
if(!isset($_SESSION['email'])){
  header("location:signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Setting</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="scroll.css">
	<style>
	#cover{
		height:100px;
	}
	#image{
		position:relative;
        bottom:60px;
	}
button,.btn{
	background:#009eec;
	color:white;
}
	</style>
</head>
<body>
	
<div class="container-fluid  text-white" >
	<div class="bg-primary text-center"id="cover">

</div>
<div class="container text-center">
<img src="<?php echo $_SESSION['photo']?>" height="120px" width="120px"alt="image" class="  rounded-circle  " id="image"><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" id="input" name="updateprofile" hidden>
<input type="button" onclick="clicked()" value="select profile">
<button  name="send">update</button>
</form><br><br>
<span  class=" h3 text-dark name"><?php echo $_SESSION['fname']?> <?php echo $_SESSION['lname']?></span>
</div>

<br>
	
 <div class="container py-2 "style="background:#009eec" >
<p class="text-center text-white ">account details</p>
<table class="table my-2 text-white borderless">
	<tr>
		<td>account number</td>
		<td id="number"><?php echo $_SESSION['account']?></td>
	</tr>
	<tr>
		<td>account holder name</td>
		<td class="name" name="myname"><?php echo $_SESSION['fname']?> <?php echo $_SESSION['lname']?></td>
	</tr>
	<tr>
		<td>branch</td>
		<td id="branch"><?php echo $_SESSION['branch']?></td>
	</tr>
	<tr>
		<td>date of join</td>
		<td id="dateofjoining"><?php echo $_SESSION['date']?></td>
	</tr>
</table>
 </div>
 <div class="row my-5 px-2 text-center">
	 <div class="col">
		 <button class="btn rounded-pill"onclick="jumpin()">change password</button>
		 </div>
	 <div class="col">
		 <button class="btn rounded-pill"onclick="back()">back</button>
	 </div>
 </div>

</div>
<script>
	let input=document.getElementById('input');
	function clicked(){
		input.click();
	}
	function jumpin(){
		window.location="changepassword";
	}
	function back(){
		history.back();
	}
</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>