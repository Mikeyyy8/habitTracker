<?php
require_once "configuration.php";
require_once "nav-bars.php";

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign-in.php");
    exit;
}

if

?>
    <section class="main-window hidden" id="section">
        <div class="main-window-container">
            <div class="main-image">
                <img src="./image/mountaineer-looking-in-binoculars.svg" alt="" srcset="">
                <p>"No habits found"</p>
                <div class="add">
                    <a href="./add-habit.php" class="button add-habit"><button>Add Habit</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>