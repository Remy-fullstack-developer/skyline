<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="banner">
    <center>
    <div class="form">
    <center>
    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; padding-top: 25px;">CREATE NEW ACCOUNT</h1>
    </center>
    <form action="createaccount.php" method="post">
        <div class="form-group">
         <label for="firstname">firstname</label><br>
         <input type="text" name="firstname" class="inputp">
        </div>
         <div class="form-group">
         <label for="lastname">lastname</label><br>
         <input type="text" name="lastname" class="inputp">
        </div>
        <div class="form-group">
         <div class="gender">
            <label for="gender">Gender</label><br>
            <label for="Male" class="radio-in-line" style="color: #fff; font-size: 20px;"><input type="radio" name="gender" id="male" value="m">Male</label>
            <label for="Female" class="radio-in-line" style="color: #fff; font-size: 20px;"><input type="radio" name="gender" id="Female" value="f">Female</label>
            <label for="Custom" class="radio-in-line" style="color: #fff; font-size: 20px;"><input type="radio" name="gender" id="Custom" value="o">Custom</label>
         </div>
        </div>
        <div class="form-group">
         <label for="Email">Email</label><br>
         <input type="email" name="email" class="inputp">
        </div>
        <div class="form-group">
            <label for="number">Phone Number</label><br>
            <input type="text" name="number" class="inputp">
        </div>
        <div class="form-group">
         <label for="password">Password</label><br>
         <input type="password" name="password" class="inputp">
        </div>
        <input type="submit" class="btn" name="submit" style="font-size: 18px; font-weight: bold; background: #fff; border: 2px solid #fff;">
    </form>
</center>
  </div>
</div>
</body>
</html>