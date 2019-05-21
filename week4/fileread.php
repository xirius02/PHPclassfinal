<?php
session_start();
include '..\functions.php';
include '..\dbconnect.php';
?>
<?php
$usr = "";
//$usr = $_SESSION['username'];
$usr = $_SESSION['username'];
    if (!isset($usr)) 
    {
      header('Location: logout.php');
    }
   // store in array

/*
   $names = file('schools.csv');
   //var_dump ($names);
    // one line at a time
   $file = fopen ('schools.csv', 'rb');
    while (!feof($file)) {
       $name = fgets ($file);
       //echo $name . "<br />";
    }
   //for comma-delimited files or CSVs (Comma Separated Values) use fopen in combination with fgetcsv.
    $file = fopen ('schools.csv', 'rb');
 
    */
    
   
   if (isset($_POST['submit1'])) 
       {
       $serch = $_POST['search'];
       if ($serch === "" || $serch == NULL) 
       {
            $back1 = wholebaseschools();
       }
         $db = getDatabase();
         $back1 = $db->query("select * from schools where name like '$serch%'");
       }else
       {
           $back1 = wholebaseschools();
       }
?>
<head>
<form name="form1" method="post">
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="upload.php">Upload<span class="sr-only"></span></a>
                    </li>
                        <div>
                            <input name="search" type="search" class="form-control" placeholder="Search by name" />
                            <br />
                             <input class="btn btn-primary" type="submit" name="submit1" onclick="document.forms['form1'].submit();" value="Submit" />
                            </div>
                        </div>
                </ul>
                    <button style="float: right; margin-left: 20%;" type="button" name="destroy2" id="destroy2" onclick="window.location.href = 'logout.php';" class="btn btn-danger">Logout</button>
            </div>
            </nav>
    </head>
    <body>
        
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($back1)) foreach ($back1 as $row): ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <?php /*
            while (!feof($file)) 
            {
            $school = fgetcsv($file);
            ?>
                <tr>
                    <td style="width: 40%"><?php echo $school[0]; ?></td>
                    <td style="width: 20%"><?php echo $school[1]; ?></td>
                    <td style="width: 20%"><?php echo $school[2]; ?></td>
                </tr>
            <?php //echo ($school[1]) . "<br />";
            }*/?>
            </form>
        </body>