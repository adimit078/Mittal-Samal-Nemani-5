<?php

    //connect to database
    $conn = mysqli_connect('localhost', 'mittal', 'test1234', 'stats');

    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    //Set Query 
    $sql = 'SELECT CalledName, Position, Points, Slam FROM tennis ORDER BY Position';

    //Make Query and get Result
    $result = mysqli_query($conn, $sql);

    //fetch resulting data
    $tennis = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

    <h4>TENNIS!</h4>
    <div class = "container">
        <div class = "row">
            <?php foreach($tennis as $tennis){ ?>

                <div class = "col s6 md3">
                    <div class = "card z-depth-0">
                        <div class = "card content cebter">
                            <h6><?php echo htmlspecialchars($tennis['CalledName']); ?></h6>
                            <div><?php echo htmlspecialchars($tennis['Position']); ?></div>
                        </div>
                    </div>
                </div>

            <?php } ?>


        </div>
    </div>
    <?php //include('templates/header.php'); ?>
    <?php //include('templates/footer.php'); ?>

</html>
