<!DOCTYPE html>
<?php
session_start();
if($_SESSION['login']==true){
header("location:../index.php");
}else{
 // keep the flow
}
?>
 <html>
   <!-- Page Header -->
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
     <!--Import custom.css-->
     <link type="text/css" rel="stylesheet" href="../css/custom.css"  media="screen,projection"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>


<?php ?>
<?php
 $unlogbar = '<!-- Materialize Navbar -->
 <nav class="callToFront">
    <div class="nav-wrapper indigo">
      <a href="../index.php" class="brand-logo">Happy News</a>
      <ul id="nav-mobile" class="right ">
        <li><a href="stuff/login.php">Login<i class="material-icons right">description</i></a></li>
        <li><a href="stuff/register.php">Register<i class="material-icons right">create</i></a></li>
      </ul>
    </div>
  </nav>';

  $logbar = '<!-- Materialize Navbar -->
  <nav class="callToFront">
     <div class="nav-wrapper indigo">
       <a href="../index.php" class="brand-logo">Happy News</a>
       <ul id="nav-mobile" class="right ">
         <li><a href="stuff/create.php">Create New!<i class="material-icons right">drafts</i></a></li>
         <li><a href="stuff/logout.php">Logout<i class="material-icons right">info_outline</i></a></li>
       </ul>
     </div>
   </nav>';



   if($_SESSION['login']==true){
   echo $logbar; //shows the navbar if theres a user on session.
   }else{
    echo $unlogbar; //shows the bar is no user in session.
   }

?>

<!-- Page Body -->
<body>

  <main>
  <br>

  <div class="row">
    <div class="container s12" >
    <div class="card hoverable">
    <div class="card-content">
    <span class="card-title">User Login</span>
    <div class="row">
    <form id="form" class="col s12" action="loginPost.php" enctype="form-data" method="POST" >
        <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="user" name="user" type="text" class="validate black-text">
          <label for="user">User Name</label>
        </div>
        <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">https</i>
          <input id="password" name="password" type="password" class="validate black-text">
          <label for="password">Password</label>
        </div>
      </div>
      <div onclick="loading()">
      <button  value="Upload" class="btn waves-effect waves-light" type="submit" name="submit">Login
        <i class="material-icons right">send</i>
        </div>
      </button>
     </form>
    </div>
   </div>
   <div id="second">
   </div>
  </div>
    </div>
    </div>
  </main>
     </body>"

<!-- Page Footer -->
<footer class="page-footer indigo callToFront">
             <div class="container">
               <div class="row">
                 <div class="col l6 s12">
                   <h5 class="white-text">Footer Content</h5>
                   <p class="grey-text text-lighten-4">Placeholder.</p>
                 </div>
                 <div class="col l4 offset-l2 s12">
                   <h5 class="white-text">Links</h5>
                   <ul>
                     <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                   </ul>
                 </div>
               </div>
             </div>
           </footer>
           <!-- Load materialize javascript-->
           <script type="text/javascript" src="../js/materialize.min.js"></script>
           <!-- Load myjavascript-->
           <script type="text/javascript" src="../js/script.js"></script>
</html>
