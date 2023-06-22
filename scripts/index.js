let ip = document.getElementById('ip')

function passval(val) {
    // console.log(val)
    ip.value += val
}

function calculate() {
  
  var table = document.getElementById("truthTable");
  let expression = document.getElementById("ip");

    // table.style.display = "block";
    table.innerHTML = `
    <thead id="tableHead">
            <tr>
                <th scope="col">A</th>
                <th scope="col">B</th>
                <th scope="col">C</th>
                <th scope="col" id="fHeader"></th>
            </tr>
        </thead>
    `;
    document.getElementById("fHeader").innerHTML = expression.value;
  // const expressions = ['(a&&b)', '((a&&b)||c)', '(!((a&&b)||c))'];
  const expressions = [expression.value];
  console.log(expressions);
  const input = ["A", "B", "C"];

  const functionsByExpr = Object.fromEntries(
    expressions.map(
      (expr) => [expr, new Function(...input, `return ${expr};`)]
      //       ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    )
  );

  const rows = [];
  for (let i = 0; i < 1 << input.length; i++) {
    const entries = input.map((name, j) => [name, (i >>> j) & (1 == 1)]);
    const values = entries.map((e) => e[1]);
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
    const cell = (c) =>
      " ".repeat(c.length / 2 - 1) +
      (row[c] ? "1" : "0") +
      " ".repeat(c.length / 2);
    console.log(
      input.map(cell).join(" ") + " | " + expressions.map(cell).join(" ")
    );
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