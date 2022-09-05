<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$people = $_POST['people'];
$start = $_POST['start'];
$message = $_POST['message'];
$to = 'info@cheaptreap.com';

$subject = 'Message from '.$name;

$msg = "<tr>
<td bgcolor='#FFFFFF'><strong>Message / Return Date :</strong></td>
<td bgcolor='#FFFFFF'>$message</td>
</tr>";

$messages = "<html><head>
<title>Form Details!</title>
</head>
<body>
<table width='80%' cellpadding='4' cellspacing='1' bgcolor='#000000'>
<tr>
<td bgcolor='#FFFFFF' colspan='2'><strong>Details of $name </strong></td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>Name : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$name</td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>Email Id : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$email</td>
</tr>
<tr>
<td bgcolor='#FFFFFF'><strong>Contact Number :</strong></td>
<td bgcolor='#FFFFFF'>$phone</td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>destination : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$destination</td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>people : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$people</td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>Start Date : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$start</td>
</tr>
<tr>
<td width='45%' bgcolor='#FFFFFF'><strong>destination : </strong></td>
<td width='55%' bgcolor='#FFFFFF' >$destination</td>
</tr>
$msg
</table>
</body>	</html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: ".$name."  <".$email.">" . "\r\n";
$sendmail = mail($to, $subject,$messages, $headers);
if($sendmail) {
    header('location: thankyou.php');
}else {
    echo 'An error found';
}
?>