<?php session_start(); ?>
<?php 
 if(!$_SESSION['email']) {
    header('Location:./');
} else {
    
?>
<?php include "header.php"; ?>
                
                <h3 class="text">Congratulations</h3>
                <h3 class="txt">NOTE !!! YOU NEED TO MAKE A PAYMENT OF NGN1000 TO GAIN ACCESS INTO THE WHATSAPP GROUP</h3>
                <img src="img/red-arrow-large.gif" alt="" class="banner-arrow">
                <div class="error bg">Congratulations,Your slot has been booked for you</div>
                <?php
                    $email=$_SESSION['email'];
                    $query="SELECT * FROM user WHERE email= '{$email}'";
                    $select=mysqli_query($conn,$query); 
                    $row=mysqli_fetch_assoc($select);
                    $status=$row['status'];
                    
                    if($status == 'pending') {
                        $message="<div class='error'>
                        Your payment is on pending ,Try to contact the Admin to confirm your Status so you can be added to the whatsapp group
                        </div>";
                    } else {
                        $message="<div><a href='whatsapp.com' class='join'>Join whatsapp group</a></div>";
                    }
                    // $nick_db=$row['email'];

                ?>
                <form method="POST" action="" class="bg-margin">
                    <?php echo $message; ?>
                </form>
            </div>
        </div>
<?php  } ?>
<script src="script/script.js"></script>
        <footer>
            @Copyright 2020 || Teslas Dev
        </footer>
    </body> 
</html>
