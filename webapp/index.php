<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>
<div style="margin-bottom: 2em;">
	<p>These are our active Products!</p>
</div>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Stock</th>
		</tr>
	</thead>
	<tbody id="active-products-table"></tbody>
</table>
<!-- <script src="controller/active-products.js"></script> -->

<script>
const updateProductTable = async function (table, productsToInsert) {
  const columns = ['name', 'price', 'stock'];

  // Insert the table rows for the found products
  const newTableRows = productsToInsert.map((product) => {
    let tableRow = document.createElement('tr');

    const tds = [];

    for (let i = 0; i < columns.length; i++) {
      let column = columns[i];

      let td = document.createElement('td');
      if(column == 'stock') {
        if (product[column] <= 3) {
			tableRow.style.color = "white";
			tableRow.style.backgroundColor = "red";
        } else {
          tableRow.style.color = 'black';
        }
      }
      td.innerText = product[column]; // dunno lol
      tableRow.appendChild(td);
    }

    return tableRow
  })

  table.replaceChildren(...newTableRows)
}

const init = async function () { // an async wrapper function which allows me to use await instead of .then()
  const result1 = await fetch('API/V1/Products')
  const _products = await result1.json()
  const products = _products.filter((product) => product.active === "1")

  console.log(products)

  updateProductTable(document.querySelector('#active-products-table'), products);
}

init();
</script>

<?php require "view/blocks/page_end.php"; ?>