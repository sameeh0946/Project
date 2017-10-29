			<div class="feature">
                <div class="image">
                <img src="images/ironman.png" style="float:left;margin-left:40px">
                </div>
				<div class="table">
                    <form action="index.php" method="post" id="form2" >
                        
                        <table >
                            <tr>
                                <td> <strong>Name: </strong></td>
                                <td> <input type="text" name="u_name" required="required"  placeholder="enter name"></td>
                            </tr>
                            <tr>
                                <td> <strong>Password: </strong></td>
                                <td> <input type="password" name="u_pass" required="required"  placeholder="enter password"></td>
                            </tr>
                            <tr>
                                <td> <strong>Email: </strong></td>
                                <td> <input type="text" name="u_email" required="required"  placeholder="enter email"></td>
                            </tr>
                            <tr>
                                <td> <strong>College: </strong></td>
                                <td> <input type="text" name="u_coll" required="required"  placeholder="enter college name"></td>
                            </tr>
                            <tr>
                                <td> <strong>Age </strong></td>
                                <td> <input type="text" name="u_age" required="required"  placeholder="enter age"></td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Interest </strong></td> 
                            <td> <input type="text" name="interest" required="required"  placeholder="enter interest"></td>
                            </tr>
                                <tr>
                                    <td><button name="sign_up" ><strong>Sign Up</strong></button></td>
                            </tr>


                        </table>
                    </form>
                </div>
				</div>
              <div>
                  
                <?php
                  
         $dbhost = 'localhost:3306';
         $dbuser = 'sam';
         $dbpass = 'sam0946abc';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
  ?>   
  
                <?php
                  if(isset($_POST['sign_up'])){
    
    $name=$_POST['u_name'];
    $pass= $_POST['u_pass'];
    $coll= $_POST['u_coll'];
    $email= $_POST['u_email'];
    $age= $_POST['u_age'];
    $interest=$_POST['interest'];

$query=" CREATE DATABASE 'helloo' ";
                
                if(mysql_query($query)){
                    echo helloo;
                }
                    else {echo no;}
                }
                   
               
                
    ?>
			    </div>
