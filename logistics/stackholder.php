<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-repeat: no-repeat ;background-size:cover;background-image:url('https://media.istockphoto.com/id/859916128/photo/truck-driving-on-the-asphalt-road-in-rural-landscape-at-sunset-with-dark-clouds.jpg?b=1&s=612x612&w=0&k=20&c=VoeM9kKRfsHf7FfHsjAmlEaikdEMXgDUhoCteF_0WRM=')">
<div class="container-fluid p-4 bg-white" style="position:absolute;left:28pc;top:3pc;width:420px;height:420px;">
    <h2 style="color:grey;font-weight:900;"><center>Login Page</center></h2>
        <form method="post" action="index.php?page=new_parcel">
      <p style="color:rgb(29, 136, 136);font-weight:600;">Username</p>
      <div class="input-group mb-3">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control"required placeholder="Username" name="usrname">
      </div>
      <p style="color:rgb(29, 136, 136);font-weight:600;">Email address</p>
      <div class="input-group mb-3">
        <input type="text" class="form-control"required placeholder="Your Email" name="email">
        <span class="input-group-text">@example.com</span>
      </div>
      <p style="color:rgb(29, 136, 136);font-weight:600;">Password</p>
      <div class="input-group mb-3">
        <input type="password" class="form-control" required placeholder="Password" name="email">
        <span class="input-group-text">12@#ab</span>
      </div><br><br>
      <div >
        <input type="submit" style="margin-left:130px;margin-top:-70px;width:130px" name="submit" value="Login" class="btn btn-secondary">
      </div>
    </form>
</div>
<!-- <img src="https://media.istockphoto.com/id/859916128/photo/truck-driving-on-the-asphalt-road-in-rural-landscape-at-sunset-with-dark-clouds.jpg?b=1&s=612x612&w=0&k=20&c=VoeM9kKRfsHf7FfHsjAmlEaikdEMXgDUhoCteF_0WRM=" 
style="position:absolute;left:43pc;top:3pc;width:420px;height:510px;"> -->
</body>
</html>
