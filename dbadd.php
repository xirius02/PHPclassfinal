<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try
        {
        include './dbconnect.php';
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
        try
        {
        include './functions.php';
        } catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
        $results = '';
        try
        {
            if (isPostRequest()) {
            $db = getDatabase();
            $stmt = $db->prepare("INSERT INTO test SET dataone = :dataone, datatwo = :datatwo");
            $dataone = filter_input(INPUT_POST, 'dataone');
            $datatwo = filter_input(INPUT_POST, 'datatwo');
            $binds = array(
                ":dataone" => $dataone,
                ":datatwo" => $datatwo
            );
            /*
             * empty()
             * isset()
             */
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }
        }
        } catch (Exception $ex) {
            
            echo $ex->getMessage();

        }
        
        ?>


        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">            
            Data one <input type="text" value="" name="dataone" />
            <br />
            Data two <input type="text" value="" name="datatwo" />
            <br />
           

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>