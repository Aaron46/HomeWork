<!--<?php
$cs = "mysql:host=localhost;dbname=pcs";
$user = "root";
try{
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $db = new PDO($cs, $user,$password = null,$options);
    $seferdb = "SELECT * FROM seforim";
    $fdb = $db ->query($seferdb) ;
    $selection = $fdb->fetchAll();
    if(!empty($_GET["selectedSefer"])){
       $sefer = $_GET["selectedSefer"];
       $seferGet = "SELECT price FROM seforim WHERE name ='$sefer'";
       $gdb = $db ->query($seferGet) ;
       $priceGet = $gdb->fetch();
        }
        
}
catch(PDOexception $e){
    die("Something went wrong " . $e->getMessage());
}
 
 

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            width:80%;
            margin:0 auto;
            background-color:white;
            
        } 
        .banner{
            background-color:blue;
            margin-top:0;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align:center;
            width:100%;
        } 
        .select{
            padding-top:100px;
            margin-left:100px;
            margin-right:100px;
            background-color:grey;
            height:105px;
            text-align:center;
        }  
    </style>
</head>
<body>
    <header class="banner">
        <h1 class="banner">PCS Seforim Center</h1>
    </header>
    <div class="select">
        <form action="">
            <label for="selectedSefer">Select A Sefer</label>
            <select name="selectedSefer" id="selectedSefer" <?php if(isset($sefer)):?>
            value="<?="$sefer";
                endif ?> ">
                <?php foreach($selection as $select){
            echo "<option>".$select["name"]."</option>";
            }?>
            </select>
            <?php if(isset($sefer)):
                    while($priceGet) :?>
                        <input type="text" value="<?= '$'.$priceGet[0]; ?>"> </input>
            <?php        $priceGet = $gdb->fetch();
                    endwhile;       
                endif ?>
            <input type="submit"/>
        </form>
    </div>
</body>
</html>-->
<?php
   
    include 'top.html'
?>


        <form class="form-horizontal">
            <div class="form-group">
                <label for="sefer" class="col-sm-2 control-label">Select A Sefer</label>
                <div class="col-sm-10">
                <select class="form-control" id="sefer" name="sefer">
                        <?php foreach($seforim as $sefer) :?>
                        <option value="<?= $sefer['id'] ?>"
                        <?php if (!empty($selectedSefer) && $sefer['id'] == $selectedSefer['id']) echo "selected" ?>
                        ><?= $sefer["name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Get Info</button>
                </div>
            </div>
        </form>

        <?php if(!empty($selectedSefer)) : ?>
            <h2 class="text-center">
                <?= $selectedSefer['name'] ?> is $<?= number_format($selectedSefer['price'], 2) ?>
            </h2>
        <?php endif ?>

        <?php if(!empty($error)) : ?>
            <h2 class="text-center alert alert-danger">
                <?= $error ?>
            </h2>
        <?php  endif ;
        include 'bottom.php'
        ?>
    