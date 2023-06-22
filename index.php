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
        <input type="button" class="" value="||" onclick="passval(this.value)">
        <input type="button" class="" value="&&" onclick="passval(this.value)">
        <!-- <input type="button" class="" value="⊙" onclick="passval(this.value)"> -->
        <!-- <input type="button" class="" value="⊕" onclick="passval(this.value)"> -->

        <div class=" input-group mb-3 w-25">
            <span class="input-group-text" id="basic-addon1">F =</span>
            <input type="text" class="form-control" placeholder="Function" aria-label="Username"
                aria-describedby="basic-addon1" id="ip">
        </div>

        <input type="button" class="" id="truthTableBtn" name="truthTableBtn" value="Get Truth Table" (
            onclick="calculate()">







    </form>



    <table class="table" id="truthTable">

    </table>



    <script>
    function calculate() {
        var table = document.getElementById("truthTable");
        let expression = document.getElementById('ip')
        // const expressions = ['(a&&b)', '((a&&b)||c)', '(!((a&&b)||c))'];
        const expressions = [expression.value];
        console.log(expressions)
        const input = ['A', 'B', 'C'];

        const functionsByExpr = Object.fromEntries(expressions.map(expr => [expr, new Function(...input,
                `return ${expr};`)]
            //       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        ));

        const rows = [];
        for (let i = 0; i < (1 << input.length); i++) {
            const entries = input.map((name, j) => [name, (i >>> j) & 1 == 1]);
            const values = entries.map(e => e[1]);
            const obj = Object.fromEntries(entries);
            for (const expr of expressions) {
                obj[expr] = functionsByExpr[expr](...values);
            }
            rows.push(obj);
        }

        // console.log(input.join(' ') + ' → ' + expressions.join(' '));
        // console.log('-'.repeat(input.reduce((s, i) => s + i.length + 1, expressions.reduce((s, e) => s + e.length + 1, 1))));
        for (const row of rows) {
            // const cell = c => ' '.repeat(c.length / 2 - 1) + (row[c] ? 'T' : 'F') + ' '.repeat(c.length / 2)
            const cell = c => ' '.repeat(c.length / 2 - 1) + (row[c] ? '1' : '0') + ' '.repeat(c.length / 2)
            console.log(input.map(cell).join(' ') + ' | ' + expressions.map(cell).join(' '));
            // console.log(input.map(cell).join(' '));

            let row1 = table.insertRow(table.rows.length);
            let cell1 = row1.insertCell(0);
            let cell2 = row1.insertCell(1);
            let cell3 = row1.insertCell(2);
            let cell4 = row1.insertCell(3);
            cell1.innerHTML = input.map(cell)[0];
            cell2.innerHTML = input.map(cell)[1];
            cell3.innerHTML = input.map(cell)[2];
            cell4.innerHTML = expressions.map(cell);
        }
        // console.log(rows[0].a, rows[0].b, rows[0].c)

        // loop for increment in table

        // for (let i = 0; i < rows.length; i++) {
        //     var row = table.insertRow(table.rows.length);
        //     var cell1 = row.insertCell(0);
        //     var cell2 = row.insertCell(1);
        //     var cell3 = row.insertCell(2);
        //     cell1.innerHTML = rows[i].c;
        //     cell2.innerHTML = rows[i].b;
        //     cell3.innerHTML = rows[i].a;
        //     // console.log(table.rows.length)
        // }

        // console.log(document.getElementById('ip').value)
    }
    </script>


    <script src="scripts/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>