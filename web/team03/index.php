<?php

?>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>Student Registration</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a id="toggleMenu">&equiv;</a></li>
            <li><a href="teamform.html" class="active">Profile</a></li>
            <li><a href="submit.php">Submission</a></li>
        </ul>
    </nav>

    <form action="submit.php" class="userform" method="post">
        <fieldset>
            <legend>Personal Info</legend>
            <label>Name:</label>
            <input id="inName" name="inName" type="text">

            <label>Email:</label>
            <input id="inEmail" name="inEmail" type="email">
            <label>Credits: </label>
            <input id="inCredits" type="number" min=0>

            <label for="inMajor">Major: </label>
            <?php
            $majors = array("Computer Engineering", "Computer information Technology", "Computer Science", "Web Design and Development");
            foreach ($majors as $major) {
                echo "<input type='radio' name='inMajor' value='$major'>$major";
            }
            ?>

            <label for="inContinent">Continent Visited</label>
            <?php
            $arrKey = array("na","sa","e");
            $arrValue = array("North America","South America","Europe");            
             
            echo "<input type="checkbox" name="inContinent" value="North America">";
            ?>            
        </fieldset>


        <?php
function myfunction($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
  if ($v==="Horse")
  {
  return "Fido";  
  }
  if ($v==="Cat")
  {
  return "Fido";
  }
return $v;
}

$a=array("Horse","Dog","Cat");
print_r(array_map("myfunction",$a));
?>



        <fieldset>
            <label>Comments: </label>
            <input type="textarea">
        </fieldset>
        <button>Submit</button>
        <button>Cancel</button>
    </form>
</body>

</html>