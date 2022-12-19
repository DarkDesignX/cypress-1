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
	<tbody id="products-table"></tbody>
</table>
<script src="controller/active-products.js"></script>
