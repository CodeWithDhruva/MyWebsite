$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['text'];

$to = "dhangarjayashree51@gmail.com"


if (mail($to, "this is the subject", $message)){
echo "Email HAs been sent successfully";
}
else
{
echo "couldnt send the mail"
}