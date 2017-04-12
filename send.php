<?php

/*if((isset($_GET['firstname'])&&$_GET['firstname']!="") &&
   (isset($_GET['lastname'])&&$_GET['lastname']!="")&&
   (isset($_GET['email'])&&$_GET['email']!="") &&
   (isset($_GET['service-type'])&&$_GET['service-type']!="")){ 
*/

if((isset($_POST['firstname'])&&$_POST['firstname']!="") &&
   (isset($_POST['phone'])&&$_POST['phone']!="")&&
   (isset($_POST['email'])&&$_POST['email']!="")){

$firstname=$_POST['firstname'];
$phone=$_POST['phone'];
$email_address=$_POST['email'];

//�������� ����������� �� ���� ���� name � �� ������ �� ���
        $to = 'dima_ec_2011@mail.ru'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
//info@mymedispace.com';
        $subject = 'From MyMediSpace'; //��������� ���������
        $message = $subject.
                        '  Name: '.$firstname.
                        '  email: '.$email_address.                        
                        '  Phone: '.$phone;

        $headers = 'From: noreplay@mymedispace.com'; //������������ � ����� �����������
       mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail

include 'savetodb.php';

}

?>

