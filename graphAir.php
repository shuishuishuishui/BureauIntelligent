<?php 

    include ("phpgraphlib.php");
    $graph = new PHPGraphLib(1000,1000);
    
    // Database Connection Information
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bureau";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $query = "SELECT date, air FROM air ORDER BY date ASC";
    $result = mysqli_query($conn, $query);
//     $row = mysqli_fetch_assoc($result);
    
    while ($row = mysqli_fetch_assoc($result)){
        $date=$row["date"];
        $air=$row["air"];
        $dataArray[$date]=$air;
    }
    

    $graph->addData($dataArray);
    $graph->setTitle("air lineGraph");
    $graph->setBars(false);
    $graph->setLine(true);
    $graph->setDataPoints(true);
    $graph->setDataPointColor('maroon');
    $graph->setDataValues(true);
//     $graph->setDataValuesColor('maroon');
    $graph->setGoalLine(.0025);
    $graph->setGoalLineColor('red');
    $graph->setTextColor("blue");
    $graph->createGraph();
    
    
?>