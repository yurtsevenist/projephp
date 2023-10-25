<?php
 try {
    include "connect.php";
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $kayit=$baglanti->prepare("INSERT INTO messages SET email=?, subject=?, message=?");
    $kayit->execute(array($email,$subject,$message));
    echo "<script>
    alert('Mesajınız alınmıştır. En kısa sürede mesajınıza geri dönüş yapılacaktır. Teşşekkür ederiz.');
    window.location.href='../contact.php';
    </script>";
 } catch (Exception $e) {
    echo "<script>
    alert('Bir Hata meydana geldi Lütfen daha sonra tekrar deneyiniz.');
    window.location.href='../contact.php';
    </script>";    
 }

?>