<?php
$connect = mysqli_connect('localhost','root','','ajax');

if (!$connect)
{
    die('Error: connection failed');
}

require_once 'connect.php';
$title = $_POST['zagolovok'];
$content = $_POST['soderjanie'];

$msql = "INSERT INTO `forum` (`id`, `zagolovok`, `soderjanie`) VALUES (NULL, '$zagolovok', '$soderjanie')";
mysqli_query($connect, $msql);

?>
