<?php
$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$plan = $_POST['plan'];
$address = $_POST['address'];
$message = $_POST['message'];
$stmt = $conn->prepare("INSERT INTO `contact_form` (`name`, `email`, `number`, `plan`, `address`, `message`) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $number, $plan, $address, $message);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();

header('location:contact.php');

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
.contact form{
    padding: 2rem;
box-shadow: var(--box-shadow);
    background: var(--transparent-white);
    border-radius: .5rem;
}
.contact form .flex{
    display: flex;
    gap:1.5rem;
    flex-wrap: wrap;
    }
.contact form .flex .inputBox{
    flex:1 1 41rem;
}

.contact form .flex .inputBox span{
    display: block;
    margin-bottom: 1rem;   
    font-size: 2rem;
    color: var(--black);
    }

.contact form .flex .inputBox input,
.contact form .flex .inputBox textarea,
.contact form .flex .inputBox select{
    width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    border-radius: .5rem;
    border: var(--border);
} 

.contact form .btn {
  margin-top: 2rem;
}
    </style>
	<title>contact</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/style.css">

  </head>

<body>
<div class="container">
<?php @include 'header.php'; ?>
<section class="contact">

    <h1 class="heading">contact us</h1>

    

        <form action="" method="post">
<div class="flex">
  <div class="inputBox">
    <span>your name</span>
    <input type="text" placeholder="enter your name" name="name" required>
</div>

<div class="inputBox">
    <span>your email</span>
    <input type="email" placeholder="enter your email" name="email" required>
</div>
<div class="inputBox">
    <span>your number</span>
    <input type="number" placeholder="enter your number" name="number" required>
</div>
<div class="inputBox">
    <span>choose plan</span>
   <select name="plan">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
</div>
<div class="inputBox">
    <span>your address</span>
    <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
</div>
<div class="inputBox">
    <span>your message</span>
    <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
</div>


</div>
<input type="submit" value="send message" class="btn" name="send">
            
        </form>

</section>
<?php @include 'footer.php'; ?>

</div>
<script.src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
