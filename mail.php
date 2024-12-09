
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    $mailto = "purvajage44@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Website " . $_POST['_subject'];
    $message = "Mail received from website" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    
    $result = mail($mailto, $subject, $message, $headers);

    if ($result) {
        echo '<script type="text/javascript">alert("Email Sent Successfully");</script>';
    } else {
        echo '<script type="text/javascript">alert("Try Again Later");</script>';
    }
}

