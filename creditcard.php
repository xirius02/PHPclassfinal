<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.html" name="index">Index</a>
        <form name="test" method="post" action="" >
            <h4>Amount Owed</h4>
            <input type="text" value="" name="owed">
            <br />
            <h4>Interest Rate</h4>
            <input type="text" value="" name="interestrate">
            <br />
            <h4>Monthly Payment</h4>
            <input type="text" value="" name="monthly">
            <br />
            <input type="submit" value="Calculate" name="clickMe">
            
            
        </form>
        <?php
            if (isset ($_POST['clickMe'])) {
                $owing = $_POST['owed'];
                $month = $_POST['monthly'];
                $hold = ($owing/$month);
                $final = 0;
                $bal = "";
                $interest = $_POST['interestrate'];
                $owingp = $_POST['owed'];
                //$interespaid = ($owing*$interest)/100/12;
                    //$owing = $owing+$interespaid-$month;
                    echo "<table border='1'>";
                    echo "<th> Month </th>";
                    echo "<th> Interest paid</th>";
                    echo "<th> Balance</th>";   
                for ($i = 1; $owing > 0; $i++)
                {
                $interespaid = ($owing*$interest)/100/12;
                $final += $interespaid;
                    $owing = $owing+$interespaid-$month;
                    if ($owing < $interespaid)
                    {
                       $owing = "";
                    }
                echo "<tr>";
                echo "<td>".$i."</td>";
                    echo "<td>".number_format($interespaid,2)."</td>";
                    echo "<td>".number_format((float)$owing,2)."</td>";
                    echo "</tr>";
                }
                $final += $owingp;
            echo "</table>";
                echo "Total Paid: ".number_format($final, 2);
            }
        ?>
    </body>
</html>