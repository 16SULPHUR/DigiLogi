<table class="table" id="truthTable">
    <!-- <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody> -->
</table>


<!-- <script>
// const expressions = ['(a&&b)', '((a&&b)||c)', '(!((a&&b)||c))'];
const expressions = ['(a&&b)'];
const input = ['a', 'b', 'c'];

const functionsByExpr = Object.fromEntries(expressions.map(expr => [expr, new Function(...input, `return ${expr};`)]
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
    const cell = c => ' '.repeat(c.length / 2 - 1) + (row[c] ? 'T' : 'F') + ' '.repeat(c.length / 2)
    console.log(input.map(cell).join(' ') + ' | ' + expressions.map(cell).join(' '));
    // console.log(input.map(cell).join(' '));
}
// console.log(rows[0].a, rows[0].b, rows[0].c)

// loop for increment in table
var table = document.getElementById("truthTable");
for (let i = 0; i < rows.length; i++) {
    var row = table.insertRow(table.rows.length);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = rows[i].c;
    cell2.innerHTML = rows[i].b;
    cell3.innerHTML = rows[i].a;
    // console.log(table.rows.length)
}

// console.log(document.getElementById('ip').value)
</script> -->