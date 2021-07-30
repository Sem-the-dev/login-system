<?php 
    include_once 'header.php';
?>

<body>

    <section>
        <h1> This is an Introduction</h1>
        <p>This is an important paragraph that explains the purpose of this website </p>
    </section>
    <section> 
        <h2> Some Basic Categories </h2>
        <h3>Fun Stuff </h3>
        <h3>Serious Stuff </h3>
        <h3>Exciting Stuff </h3>

<?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>Choose another username</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Choose another email</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords don't match</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, please try again</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username already taken</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>You have signed up</p>";
        }
    }
?>  
    
    
    </section>




<?php 
    include_once 'footer.php';
?>

</body>
</html>