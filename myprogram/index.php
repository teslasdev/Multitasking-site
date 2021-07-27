<?php session_start(); ?>
<?php include "header.php"; ?>
                <h3 class="text">30 SLOTS LEFT</h3>
                <h3 class="txt">REGISTER BELOW NOW FOR JUST NGN1000</h3>
                <img src="img/red-arrow-large.gif" alt="" class="banner-arrow">
                <?php 
                    // use PHPMailer\PHPMailer\PHPMailer;
                    // require 'vendor/autoload.php';
                
                //    $mail = new PHPMailer(true);            
                    if(isset($_POST['register'])) {
                        $email=$_POST['email'];
                        $nick=$_POST['nick'];
                        $number=$_POST['number'];
                        $gender=$_POST['gender'];
                        $item=$_POST['item'];
                         

                        $query="SELECT * FROM user WHERE email= '{$email}'";
                        $select=mysqli_query($conn,$query);
                        $selecting_if_user_exist=mysqli_num_rows($select);
                        if($selecting_if_user_exist > 0) {
                            $message="<div class='error'>Email Exists,Please Try Another email</div>";
                        } else {
                         // $message=$gender;
                        if(!empty($email) && !empty($nick) && !empty($number) && !empty($gender) && !empty($item) ) {
                        
                        $query ="INSERT INTO user(email,nick,number,gender,item) ";
                        $query .="VALUES('{$email}','{$nick}',$number,'{$gender}','{$item}')";
                        $inserting=mysqli_query($conn,$query);

                        $query="SELECT * FROM user WHERE email= '{$email}'";
                        $selecting_user=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($selecting_user);
                        $email_db=$row['email'];

                        
                        // $nick_db=$row['email'];
                        // $number_db=$row['number'];

                        // if($)
                        $_SESSION['email']=$email_db;
                      

                        if($inserting) {
                            header('Location:success.php');
        //                     $body="<div class='email'>
        //                                 <div class='email-container'>
        //                                     <div class='header'>
        //                                         <img src='img/logopng.png' alt='logo' class='logo'>
        //                                         <p class='txt-primary'>...You just take a step,Now get ready to see the superiorty in you</p>
        //                                     </div>
        //                                     <div class='text-content'>
        //                                         <p class='txt-content__primary'>Hi,name</p>
        //                                         <p class='txt-content__primary'>I TeslasDev really appreciate your for take this bold step to join this training,In this training we try to make you understand the step ,logic and making behind all technologies related to web</p>
        //                                         <h4>So in this training ,I will be teaching you the 4 basics/major elements Use to develop a website E.g <i>Facebook,Google,Jumia etc</i></h4>                                    

        //                                         <h3>Which are:</h3>
        //                                         <ul>
        //                                             <li>HTML(CONTENT)</li>
        //                                             <li>CSS(LAYOUTS)</li>
        //                                             <li>JAVASCRIPT(FUNCTIONS)</li>
        //                                             <li>PHP(RESPONDING)</li>
        //                                         </ul>
        //                                         <p>You really do not want to miss all this.?Do you ?NO</p>
        //                                         <p>Make a payment by click on the button for your registration fee
        //                                         </p>
        //                                         <div class='pay'> <a href='#' class='btn'>Make Payment</a></div>
        //                                         <p class='txt'>THANK YOU.</p>
        //                                     </div>
        //                                 </div>
        //                             </div>";
        // try {
        //    $mail ->isSMTP();
        //    $mail ->SMTPDebug = 3;
        //    $mail ->Host = "smtp.gmail.com";
        //    $mail ->SMTPAuth = true;
        //    $mail ->Username ='johnaj3662@gmail.com';
        //    $mail ->Password ='bgdfxfetprchvlwk';
        //    $mail ->SMTPSecure ="tls";
        //    $mail -> Port =587;
        //    $mail ->setFrom('johnaj3662@gmail.com','Testing');
        //    $mail ->addAddress('tipsonpaul@gmail.com');

        //    $mail ->isHTML(true);
        //    $mail ->Subject = 'EPIN FOR NECO/WAEC';
        //    $mail ->Body =$body;

        //    $mail -> send();

            
        //    echo 'Message has been sent';
        //    } catch (Exception $e) {
        //        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        //    } 
                        }
                        } else {
                            $message="<div class='error'>Enter Your details please</div>";
                        }
                        }
                    } else {
                        $message="";
                    }
    
                
                ?>
                <form action="" method="POST">
                    <?php echo $message; ?>
                    <div class="form-input">
                        <input type="email" placeholder="Enter your Email" name="email">
                    </div>
                    <div class="form-input">
                        <input type="text" placeholder="Enter your Nickname" name="nick">
                    </div>
                    <div class="form-input">
                        <input type="text" placeholder="Enter your Phone Number" name="number">
                    </div>
                    <div class="form-input">
                        <select name="gender">
                        <option value="">What can we refer you as?</option>
                            <option value="him">He/Him</option>
                            <option value="her">She/Her</option>
                            <option value="none">None</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <select name="item">
                            <option value="">I have</option>
                            <option value="laptop">Laptop</option>
                            <option value="phone">Phone</option>
                            <option value="both">Both</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox"id="agree" required>
                        <label for="agree">I agree to be part of the training</label>
                    </div>
                    <div class="form-input">
                        <input type="submit" value="Register Now" class="submit" name="register">
                    </div>
                </form>
            </div>
        </div>
        <script src="script/script.js"></script>
        <footer>
            @Copyright 2020 || Teslas Dev
        </footer>
    </body>
</html>
