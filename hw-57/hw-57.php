 <?php $presidents = [ ["name" => "Donald J Trump","years" =>"2017",71],["name" =>"Barack Obama","years" =>"2009-2016",55],
  ["name" =>"George W Bush","years" =>"2001-2008",70] ];
  $tablehead = ["President","Years in office","age"]?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--style>
  td{
        border: 1px solid black;
    }
    </style-->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
     <!--?php
        $N45 = 45;
        $name = "Donald Trump";
        $x = 2017;
 
       // echo $name;
        //echo $x;
        $N44 = 44;
        $Obama= "Barrack H Obama";
        $z = 2009;

        $N43 = 43;
        $Bush = "George W Bush";
        $y = 2001
    ?-->
    <div class="container">
        <div class="jumbotron warning">
            <h1>US Presidents</h1>
        </div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <!--th> President </th>
                <th>Year First Elected</th-->
                <?php
                    foreach($tablehead as $heads){
                        echo "<th>".$heads."</th>";
                    }    
                ?>    
            </thead>
            <tbody>
                <?php
                    foreach($presidents as $president) {
                            echo '<tr>';
                           
                            foreach($president as $property){
                                echo "<td>" .$property."</td>" ;
                            } 
                            echo "</tr>";
                        }
                         print_r($presidents);
                ?>
                <!--tr>
                    <td><?php  echo $N45;  ?></td>
                    <td><?php  echo $name;  ?></td>
                    <td><?php  echo $x;  ?></td>
                </tr>
                <tr>
                    <td><?php  echo $N44;  ?></td>
                    <td><?php  echo $Obama;  ?></td>
                    <td><?php  echo $z;  ?></td>
                </tr>
                <tr>
                    <td><?php  echo $N43;  ?></td>
                    <td><?php  echo  $Bush;  ?></td>
                    <td><?php  echo $y;  ?></td>
                </tr-->

            </tbody>
        </table>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>