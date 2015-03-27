<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">
      <div class="jumbotron">
        <h1>Welcome to BUsingles <div id="bigredheart">&hearts;</div></h1>
        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
             
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        </div>
        </div>  
          
<?php if(!isset($_SESSION["username"])) { ?>      
        <div class="jumbotron">
            <h1><a id="jumpto">Sign Up...</a></h1>
    <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>

            <?php if(isset($_SESSION["username"])) { ?>
            <?php //include_once("../includes/templates/homepage-loggedin.php"); ?>
            <?php } else { ?>
            <?php //include_once("../includes/templates/homepage.php"); ?>
            <?php } ?>
            
            <div class="row">
            <div class="col-md-4">

            <div class="sign-up-box">
<form action="register.php" method="post">
           <p>Username:</p> <input placeholder="Your Username"type="text" required name="username" value=""><br>
           <p>Password:</p> <input placeholder="Your Password" type="password" required name="password1" value=""><br>
           <p>Retype Password:</p> <input placeholder="Retype Password"type="password" required name="password2" value=""><br>
           <p>First Name:</p> <input placeholder="Your First Name" type="text" required name="firstname" value=""><br>
           <p>Last Name:</p> <input placeholder="Your Last Name" type="text" required name="lastname" value=""><br>
           <p>Select your hair colour:</p>
                <select required name="hair">
                <option value="">Select...</option>
                <option value="Brown">Brown</option>
                <option value="Ginger">Ginger</option>
                <option value="Ginger">Blonde</option>
                <option value="Ginger">Black</option></select>
           <p>Select Your Age:
                <select required name="age">
                <option value="">Select...</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option></select></p><br>
           <p>Select Your Gender:
                <select required name="gender">
                <option value="">Select...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select></p><br>
           <p>Select Your University Course
                <select required name="uni">
                <option value="">Select...</option>
                <option value="Digital Media Design">Digital Media Design BA (Hons)</option>   
                <option value="Advertising BA (Hons)">Advertising BA (Hons)</option>
                <option value="Computer Animation Arts BA (Hons)">Computer Animation Arts BA                    (Hons)</option>
                <option value="History BA (Hons)">History BA (Hons)</option></select></p><br>
           <p>Bio:</p> <textarea required name="biography" maxlength="200" placeholder="Enter a short description"></textarea><br>
              
        <input type="submit" name="register" value="register" class="btn btn-success" >

</form>
        </div><!--/.sign-up-box-->
        <?php } ?>

        </div>
        <div class="col-md-4"></div>
        </div><!--/.row-->
        </div> <!--/.jumbotron-->      
        </div>
        </div><!--/.rows-->
        </div><!--/.container-->
        <?php 

            if(isset($_REQUEST['gender']) && $_REQUEST['gender'] == '0') { 
            echo 'Please select a gender.'; } ?>


        <?php include_once("../includes/templates/footer.php"); ?>