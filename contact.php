<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLease contact me here</title>

</head>
<body>

    <h1>Contact form for website</h1>

    <?php


        function checkinput($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        if (isset($_POST['contactform'])){
            $fname = checkinput($_POST['fname']);
            $lname = checkinput($_POST['lname']);
            $email = checkinput($_POST['email']);
            $pno = checkinput($_POST['pno']);
            $msg = checkinput($_POST['msg']);

            if($_POST['fname'] == ""){
                echo "First name is required";
            }
            else if($_POST['lname'] == ""){
                echo "Last name is required";
            }
            else if($_POST['email'] == ""){
                echo "Email is required";
            }
            else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Enter a valid email";
            }
            else if($_POST["pno"] == ""){
                echo "Phone is required";
            }
            else if($_POST['msg'] == ""){
                echo "Message ie required";
            }
            else{
                {

                    $to = "mrac21yt@gmail.com";
                    $subject = "Mysubject";
                    $txt = "Something";

                    $header = "From: acindustries@world.com";

                    mail($to, $subject, $txt, $header);

                    echo '<script type="text/javascript"> alert("Submitted Successfully"); window.location = redirectAc.php; </script>';

                }
            }

        }




    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name='contactform'>
    
    <table>

    <tr>
        <td><label>First name</label></td>
        <td> <input type="text" name="fname"> </td>
    </tr>

    <tr>
        <td><label>Last name</label></td>
        <td> <input type="text" name="lname"> </td>
    </tr>

    <tr>
        <td><label>email</label></td>
        <td> <input type="text" name="email"> </td>
    </tr>

    <tr>
        <td><label>Phone number</label></td>
        <td> <input type="text" name="pno"> </td>
    </tr>


    <tr>
        <td><label>message</label></td>
        <td> <textarea name="msg"></textarea> </td>
    </tr>

    <tr>
        <td colspan="2"><input type="submit" name="contactform"></td>
    </tr>


       
    </table>
    
    </form>
    
    
    


</body>
</html>