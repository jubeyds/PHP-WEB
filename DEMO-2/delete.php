<?php ob_start(); ?>
<?php session_start(); ?>
<?php session_destroy(); ?>
<?php header('Location: index.php'); 
exit();
?>











<?php $content = ob_get_clean();
require 'template.php';
?>
