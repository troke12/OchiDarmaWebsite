<?php
//define nya 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

//nama email gueehhh
$to="darma.ochi@live.com";
$subjek="Kontak dari Form";
$from="From: $name &lt;$email&gt;";

//kirimkan ke email admin
@ mail($to, $subjek, $comment, $from);
echo "Pesan berhasil terikirim.";

?>