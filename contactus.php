<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-62B5T1CGLJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-62B5T1CGLJ');
</script>
<link rel="stylesheet" type="text/css" href="css/styleAC.css">
<link rel="icon" href="images/favicon.png" type="image/png">
<meta charset="utf-8">
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>Contact Us Response</title>
</head>
<body>
<header class="header">
<img alt="header2" src="images/header2.png">
</header>

<?php

  function contactLog($uFName,$uLName,$uEmail,$uComment) {
	$log_entry = date('Y-m-d H:i:s')
	. ","
	.$uFName
	. ","
	.$uLName
	. ","
	.$uEmail
	. ","
	.$uComment
	. PHP_EOL;
	$log_file = '../contact/contact.log';
	file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}
// function to clean data
function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}

// define variables and set to empty values
$uLName = $uFName = $uEmail = $uComment = $msg1 = $msg2 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uFName = clean_input($_POST["uFName"]);
  $uLName = clean_input($_POST["uLName"]);
  $uEmail = clean_input($_POST["uEmail"]);
  $uComment = clean_input($_POST["uComment"]); 
}

// Append the data to the file
if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
    msg1 = "Sent Successfully.";
} else {
    msg1 = "Error: Could not send text.";
}
?>
<nav>
<a class="btn1" href="index.html">Home</a>
</nav>
<main>
<h2>
	<?php echo $msg1; ?>
</h2>
<p>
Thank you. Have a nice day.
</p>
<br>
<div style="text-align: center;">
  <img src="images/users.png" style="display: inline-block; width: 44%;">
  <img src="images/choice.png" style="display: inline-block; width: 49%;">
</div>
<br>
</main>
<footer>
<h6>&#169; DomainTrusts.com 2026</h6>
</footer>
</body>
</html>
