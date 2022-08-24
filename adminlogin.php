<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  </head>
  <header>
  <div class="hero">
        <nav>
            <h2 class="Logo"><a href="index.html">Kareem <span>Abdul & Jabber</span></a></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
            <button class="nav_btn" type="button">Contact</button>
        </nav>
    </div>
  </header>

  <body>
    <form action="adminlogin.php" method="POST">
      <div class="boxx">
      <table>
        <tr>
          <td><b><p style="font-family:'Courier New'">Admin ID:</p></b></td>
          <td><input type="text" placeholder="Enter User ID" name="id" required /></td>
        </tr>
        <tr>
          <td><b><p style="font-family:'Courier New'">Password:</p></b></td>
          <td><input type="password" placeholder="Enter Password" name="password" required /></td>
        </tr>
      </table>
      <button class="botam" name="login" type="submit">LOGIN</button>
    </div>
    </form>
<?php require './config.php';

			if(isset($_POST['login']))
			{
				$id=$_POST['id'];
				$password=$_POST['password'];
				$q = "select * from admin where id='$id' and password='$password' ";
				$query = mysqli_query($conn,$q);

				if(mysqli_num_rows($query))
					{
					$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

					$_SESSION['id'] = $id;
					$_SESSION['password'] = $password;

					echo("<script>window.location.href = 'admin.php';</script>");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
			} 
		?>



  </body>
</html>
