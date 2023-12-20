<?php

require_once "nav-bars.php";
require_once "configuration.php";

// Create a mysql query 
$query = "SELECT * FROM habits";

$result = mysqli_query($connect, $query);

?>

<section class="all-habits">
    <div class="all-habits-container">
        <!-- The card will take the full length of the container -->

        <?php
            while($habits = mysqli_fetch_assoc($result)){ ?>
                <div class="all-habits-card"> 
                    <div class="all-habits-card-container">
                        <div class="tag">
                            <h2><?php echo $habits["tag"]; ?> habit</h2>
                        </div>
                        <h2>Title: <?php echo $habits["title"]; ?></h2>
                        <div class="content">
                            <p><?php echo $habits["content"]; ?></p>
                        </div>
                        <div class="date">
                            <p>Created on: <?php echo $habits["create_date"]; ?></p>
                        </div>
                    </div>
                    <div class="button">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>
            <?php
            }
            ?>
            <button class="delete all">Delete All</button>

    </div>
</section>