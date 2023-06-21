<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">
    <?php include 'partials/_header.php';?>

    <form action="index.php" method="POST">



        <input type="button" class="" value="A" onclick="passval(this.value)">
        <input type="button" class="" value="B" onclick="passval(this.value)">
        <input type="button" class="" value="C" onclick="passval(this.value)">
        <!-- <input type="button" class="" value="D" onclick="passval(this.value)"> -->
        <!-- <input type="button" class="" value="E" onclick="passval(this.value)"> -->
        <br>
        <input type="button" class="" value="A'" onclick="passval(this.value)">
        <input type="button" class="" value="B'" onclick="passval(this.value)">
        <input type="button" class="" value="C'" onclick="passval(this.value)">
        <!-- <input type="button" class="" value="D'" onclick="passval(this.value)"> -->
        <!-- <input type="button" class="" value="E'" onclick="passval(this.value)"> -->
        <br>
        <input type="button" class="" value="(" onclick="passval(this.value)">
        <input type="button" class="" value=")" onclick="passval(this.value)">
        <input type="button" class="" value="+" onclick="passval(this.value)">
        <input type="button" class="" value="⋅" onclick="passval(this.value)">
        <!-- <input type="button" class="" value="⊙" onclick="passval(this.value)"> -->
        <!-- <input type="button" class="" value="⊕" onclick="passval(this.value)"> -->

        <div class=" input-group mb-3 w-25">
            <span class="input-group-text" id="basic-addon1">F =</span>
            <input type="text" class="form-control" placeholder="Function" aria-label="Username"
                aria-describedby="basic-addon1" id="ip">
        </div>

        <input type="submit" class="" id="submit" value="Get Truth Table">

        <h1 id="content"></h1>




    </form>




    <script src="scripts/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>