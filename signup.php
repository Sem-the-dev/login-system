<?php 
    include_once 'header.php';
?>

<body>

<section>
    <h2> Sign Up</h2>
    <form class="" action="includes/signup.inc.php" method ="post"> 
        <input type="text" name="name" placeholder="Full name ..." >
        <input type="text" name="email" placeholder="Email ..." >
        <input type="text" name="uid" placeholder="Username ..." >
        <input type="password" name="pwd" placeholder="Password ..." >
        <input type="password" name="pwdrepeat" placeholder="Repeat password ..." >
        <button type="submit" name="submit"> Sign UP</button>
    </form>
</section>
<?php 
    include_once 'footer.php';
?>

</body>
</html>