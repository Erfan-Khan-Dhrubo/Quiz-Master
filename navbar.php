<nav class="navbar navbar-expand-sm" style="position: sticky; top: 0; background-color: white;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="bulb" src="images/bulb2.png" />
            <span id="top_text">Quizzz</span>
            <?php
            if (isset($_SESSION['no'])) {
                $namee = strtoupper($_SESSION['name']);
                echo '<span id="user"> ( User : ' . $namee .  ' )</span>';
            }

            if (basename($_SERVER['PHP_SELF']) == 'quiz.php') { ?>
                <span style="font-family: Georgia; padding-left:250px; font-size:25px; color:#82368C;">Time Remaining:
                    <span id="timer" style="color: red"></span>
                </span>
            <?php
            } ?>

        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> -->
        <ul class="navbar-nav my">
            <li id="<?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>" class="nav-item navilink">
                <a class="nav-link" href="home.php">Home</a>
            </li>

            <li class="nav-item dropdown navilink">
                <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    role="button" href="quizType.php">Category</a>
                <ul class="dropdown-menu dropstyle">

                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "my_project");
                    $sql = "SELECT * FROM quiz";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) { ?> <!-- Quiz Name -->
                        <li><a class="dropdown-item" href="quiz number per subject.php?id=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li id="<?php echo basename($_SERVER['PHP_SELF']) == 'scoreboard.php' ? 'active' : ''; ?>" class="nav-item navilink">
                <a class="nav-link" href="scoreboard.php">Scoreboard</a>
            </li>
            <?php
            if (isset($_SESSION["admin"])) {
            } else { ?>
                <li id="<?php echo basename($_SERVER['PHP_SELF']) == 'adminLogin.php' ? 'active' : ''; ?>" class="nav-item navilink">
                    <a class="nav-link" href="adminLogin.php">Admin</a>
                </li>
            <?php } ?>
            <?php
            if (isset($_SESSION['common'])) { ?>
                <li class="nav-item navilink">
                    <a class="nav-link" href="logout_php.php">Log out</a>
                </li>
            <?php
            } else { ?>
                <li id="<?php echo basename($_SERVER['PHP_SELF']) == 'loginForm.php' ? 'active' : ''; ?>" class="nav-item navilink">
                    <a class="nav-link" href="loginForm.php">Log In</a>
                </li>
            <?php
            } ?>
        </ul>

    </div>
</nav>