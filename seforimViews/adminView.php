
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Sefarim</h1>
            <h3 class="text-center">Logged is as Admin</h3>
        </div>
        
        <form class="form-inline form-style" method="POST">
            <label class="sr-only" for="name">Sefer Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="name" name="name1" placeholder="New Sefer Name:" required>

            <label class="sr-only" for="price">Price</label>
            <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="price" name="price" placeholder="New Sefer Price:" required>
            <button type="submit" name="insert" class="btn btn-primary button">Insert New Sefer</button>
        </form>
        <?php if(isset($_POST['insert'])):?>
            <h2><?=$seferName?> for <?=$seferPrice?> was inserted into your database"</h2>;
        <?php endif ?>
        <form class="form-inline form-style" method="POST">
            <div class="form-group">
                <label for="name">Get A Price: </label>
                <select name="name">               
                    <?php 
                        foreach($sefarimNames as $Name){
                        echo"<option>".$Name."</option>";     
                    }
                    ?>
                </select>
                <button id="button" type="submit" name="getPrice" class="btn btn-primary">Get Price</button>
                <?php if(isset($_POST["getPrice"])):?>
                <h5> <?=$seferPrice?> </h5>
                <?php endif ?>
            </div>
        </form> 
         <form class="form-inline form-style" method="POST">
            <div class="form-group">
                <label for="deleteN">Pick a sefer you want to Delete: </label>
                <select name="deleteN">               
                    <?php foreach($sefarimNames as $Name){
                        echo"<option>".$Name."</option>";
                    }
                    ?>
                </select>
                <button id="button" type="submit" name="deleteB" class="btn btn-danger">DELETE</button>
                <?php if(isset($_POST["deleteB"])):?>
                <h1> <?= "$nameDel was deleted from the db" ?> </h1>
                <?php endif ?>
            </div>             
        </form>
    </div>   
</body>
</html>