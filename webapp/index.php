<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>
<!-- <div class="field">
	<label for="fizzbuzz-field">Number</label>
	<input type="number" id="fizzbuzz-field" min="0" required>
</div> -->
<?php require "view/blocks/page_end.php"; ?>

<script>
window.fizzbuzz = function (number) {
	//	return 'fizz'

	//How to return 'fizzbuzz' if the number is dividible by 3 and 5?
	if (number % 3 === 0) {
		return 'Fizz'
	}
	if (number % 5 === 0) {
		return 'Buzz'
	}
}
</script>