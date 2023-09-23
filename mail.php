<?php
 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "split.letsreformattheearth@gmail.com";
$subject = "Mail From SPLIT";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: hariprasathsnsct@gmail.com" . "\r\n" .
"CC: nivedeoushp2002@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo "<script>alert('Your message has been sent') </script>  ";
?>