<?php
    include 'functions.php';

    //1. Range of a triangle
    if(isset($_GET['find'])){
        // Get input and convert to integer
        $triangle1 = intval($_GET['triangle1']);
        $triangle2 = intval($_GET['triangle2']);

        echo "<h3> Output: " . third_side($triangle1, $triangle2) . "</h3>";
    }




    // 2. Counts all ones in Binary
    if(isset($_GET['count'])){
        // Get input and conver to integer
        $num = intval($_GET['num']);

        echo "<h3> Output: " . countAllOnes($num) . "</h3>";
    }



    //3. Receives 2 parts of a path
    if (isset($_GET['submit'])) {
        $srate = $_GET['srate'];
        $prate = $_GET['prate'];

        echo "<h3> Output: " . separate($srate, $prate) . "</3>";

    }



    // 4. Check if number is a sastry number
    if(isset($_GET['sastry'])){
        // Get input and conver to integer
        $num = intval($_GET['num']);

        echo "<h3> Output: " . isSastry($num) . "</h3>";
    }

    ?>