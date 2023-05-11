<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="stylee.css"/>
    <title>Tubes</title>
    <style>
        
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.banner {
    width: 100%;
    height: 100vh;
}
.banner video {
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.form-box {
    position: absolute;
    background-size: cover;
    background-position: center;
    margin-left: 600px;
    margin-top: 190px;

}

    </style>
</head>
<body>
<div class="banner">
    <video autoplay loop muted>
        <source src="video/vid.mp4">
    </video>
    <div class="form-box">
<form class="form">
    <span class="title">Sign up</span>
    <span class="subtitle">Create a free account with your email.</span>
    <div class="form-container">
      <input type="text" class="input" placeholder="Full Name">
			<input type="email" class="input" placeholder="Email">
			<input type="password" class="input" placeholder="Password">
    </div>
    <button>Sign up</button>
</form>
<div class="form-section">
  <p>Have an account? <a href="">Log in</a> </p>
</div>
</div>
</div>    
</body>

</html>