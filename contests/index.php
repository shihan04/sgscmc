<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width , initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <div class="full">
            <div class="ins">
                <h1 align="center">Contests</h1>
                <h4 align="center"><a href="https://sgtcmc.000webhostapp.com/contests/index.php">Home</a> | <a href="https://sgtcmc.000webhostapp.com/contests/rating.php">Rating</a> | <a href="https://sgtcmc.000webhostapp.com/contests/login.php">Login</a> | <a href="https://sgtcmc.000webhostapp.com/contests/register.php">Register</a></h4>
                <?php
                    if(isset($_SESSION["user"])){
                        echo "<p align=\"right\">Welcome <strong>".$_SESSION["name"].". </strong><a href=\"https://sgtcmc.000webhostapp.com/contests/logout.php\">Logout</a>?</p>";
                    }
                ?>
                <p>This is the contest page of SGSCMC website. Here you can find all contests including past, running and upcomming. To participate in any contest you need to register here and then login. Note that this is not the same login in the main page.</p>
            </div>
            <div class="list">
                <table align="center">
                    <tr>
                        <th>Name</th>
                        <th>Authors</th>
                        <th>Start Time</th>
                        <th>Length</th>
                    </tr>
                    <?php
                        $dir=getcwd()."/id/";
                        $f = scandir($dir,1);
                        $l=count($f)-2;
                        for($i=0;$i<$l;$i++){
                            $c=fopen($dir.$f[$i]."/info.txt","r");
                            echo "<tr align=\"center\"><td>".fgets($c)."<br><a href=\"https://sgtcmc.000webhostapp.com/contests/id/".$f[$i]."/index.php\">Enter</a></td><td>".fgets($c)."</td><td>".fgets($c)."</td><td>".fgets($c)."</td></tr>";
                            fclose($c);
                        }
                        
                    ?>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
