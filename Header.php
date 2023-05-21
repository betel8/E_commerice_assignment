<nav class="header" style="background-color:#a52a2a" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if(isset($_SESSION['email'])){?>
                    <a href="Products.php" ><img src="./images/logo3.png" alt="#" ></a>
                    <?php } else { ?>
                    <a href="Index.php" ><img src="./images/logo3.png" alt="#" style="height:5vh"></a>
                    <?php }?>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right ">
                        <?php 
                        if(isset($_SESSION['email'])) {
                        ?>
                        <li class="nav-link"><a class="nav-link" href="Cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a class="nav-link" href="Settings.php?password_error="><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a class="nav-link" href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php
                        }else{
                        ?>
                        <li class="nav-item" ><a class="nav-link" href="Signup.php?email_error="><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a class="nav-link" data-toggle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a class="nav-link" href="About.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                        <li><a  class="nav-link" href="Contact.php?success="><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
</nav>
</header>
<?php include "LogModal.php"; ?>