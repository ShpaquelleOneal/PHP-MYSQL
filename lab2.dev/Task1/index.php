<?php
    $error = false;

    //TODO: set up Mysql connection;
    $server = "127.0.0.1:3306";
    $database = "mobile";
    $user = "root";
    $password = "";
    $mysqli = new mysqli($server, $user, $password, $database);

    // Check connection
    /*
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    echo "Connected successfully";*/

    //TODO: Fill the array of manufacturer IDs and titles (e.g. "33" => "Alfa Romeo")
    $manufacturers = array();
    $manufacturer_handle = $mysqli->query("select id, title from manufacturers order by title");
    while ($row = $manufacturer_handle->fetch_assoc()) {
        $manufacturers [$row["id"]] = $row["title"];
    }


    //TODO: Fill the array of color IDs and titles (e.g. "19" => "Tumši pelēka" (dark grey)) 
    $colors = array();
    $colors_handle = $mysqli->query("select id, title from colors order by title");
    while ($row = $colors_handle->fetch_assoc()) {
        $colors [$row["id"]] = $row["title"];
    }

    //TODO: collect and sanitize the current inputs from GET data
    $year = NULL; //initial value
    if(isset($_GET['submit'])) {
        $manufacturer = $_GET['manufacturer'];
        $color = $_GET['color'];
        $year = isset($_GET['year']) ? $_GET['year'] : null;  // set year to null if not set

        if (!$manufacturer || !$color) { //set error to true if one of the parameters is not chosen
            $error = true;
        }
    }

        //TODO: connect to database, make a query, collect results, save it to $results array as objects

    $results_sql = // ? - placeholder for future binding
        "select manufacturers.title as manufacturer, models.title as model, count(*) as count
        from manufacturers
        inner join models on manufacturer_id = manufacturers.id
        inner join cars on cars.model_id = models.id
        where
        manufacturer_id = ? 
        and color_id = ?
        " . ($year ? "and cars.registration_year = ?" : "") .  // add year, if year is set, search with the year
        " group by manufacturers.title, models.title
        order by count desc";
    $results_query = $mysqli->prepare($results_sql);

    // bind parameters to the query
    if ($year) {  // bind year only if it is set
        $results_query->bind_param("sss", $manufacturer, $color, $year);
    } else {
        $results_query->bind_param("ss", $manufacturer, $color);
    }

    $results_query->execute(); // execute the sql query
    $results = $results_query->get_result()->fetch_all(MYSQLI_ASSOC); // fetch query results to results variable in format of associative array

    //TODO: complete the view file
    require("view.php");

    //TASK 2: Log error to outside log folder
    require("../Task2/logger.php");
    $logPath = "C:\php-logs\logfile.txt"; // set path to the logfile
    $logger = new Logger($logPath);
    $result = $error ? "ERROR" : "OK"; // if error, log error, if not, log ok
    $logger->log($result);

?>