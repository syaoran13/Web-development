<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  type = "text/css" href ="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
        
    </head>
    <body>
<?php include 'menu.php'?>

<section class= "my-5">
    
<div class= "py-5">
    <h3 class= "text-center">Contact Us</h3>
</div>
<div class= "w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class= "form-control">
    </div>

    <div class="form-group">
      <label>Email-Id</label>
      <input type="text" name="email" autocomplete="off" class= "form-control">
    </div>

    <div class="form-group">
      <label>Contact-Number</label>
      <input type="text" name="mobile" autocomplete="off" class= "form-control">
    </div>

    <div class="form-group">
      <label>Message</label>
      <textarea class="form-control" name="Message">
      </textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>


<footer>
  <p class="p-3 bg-dark text-white text-center">@Grace</p>
</footer>
