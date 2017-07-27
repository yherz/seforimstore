
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class ="jumbotron">
        <h1 class="text-center">Sefarim Store</h1>
        <h3>Logged in as User</h3>
    </div>
    <div class="col-md-3">
    <!--filter goes here -->
    <?php include "../seforimViews/filterView.php"?>
    </div>
    <div class="col-md-9">
    <table class="table">
        <thead>
            <th>Sefer Name</th>
            <th>Sefer Price</th>
        </thead>
        <tbody>
            <?php  $sefarimAll=populateTable ($conn,$filter,$minPrice,$maxPrice);
         
            foreach($sefarimAll as $seforimArray){
                echo"<tr>";
                    foreach($seforimArray as $seforimDetails){
                        echo"<td>". $seforimDetails ."</td>";
                    };
                echo "</tr>";
            }
          ?>

        </tbody>
    </table>
    </div>
</div> 
</body>
</html>