<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <title>Document</title>
</head>
<body>
    <form class="well">
        <h5>Filter</h5>
        <div class="form-group">
            <label for="minPrice">Min Price</label>
            <input type="number" class="form-control" id="minPrice" name="min" placeholder="Min Price" min=1 required>
        </div>
        <div class="form-group">
            <label for="maxPrice">Max Price</label>
            <input type="number" class="form-control" id="maxPrice" name = "max" placeholder="Max Price" required>
        </div>
        <button type="submit" name="filterSubmit" class="btn-primary">Submit</button>
    </form>
</body>
</html>