<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="sub" method="post" action="">
            <input type="text" name="ent" value="22" ></input>
            <input type="submit" name="enter" >enter</input>
        </form>
<?php
//phpinfo();
if(isset ($_POST['enter']))
{
//$num1 = $_POST['ent'];
    echo $_POST['ent'];
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
    </body>
</html>

