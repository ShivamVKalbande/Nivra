<?php
if(mail("shivamkalbande@gmail.com", "Test", "Testing mail function")) {
    echo "Server can send mail!";
} else {
    echo "Server BLOCKED the mail function.";
}
?>