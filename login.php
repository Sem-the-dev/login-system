<?php 
    include_once 'header.php';
?>

<body>

<section>
    <h2> Log in</h2>
    <form class="" action="includes/login.inc.php" method ="post"> 
        <input type="text" name="name" placeholder="Username or email ..." >
        <input type="password" name="pwd" placeholder="Password ..." >
        <input type="password" name="pwdrepeat" placeholder="Repeat password ..." >
        <button type="submit" name="submit"> Log in</button>
    </form>
</section>
<?php 
    include_once 'footer.php';
?>

</body>
</html>