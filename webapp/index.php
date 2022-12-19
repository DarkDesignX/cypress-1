<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>
<?php require "view/blocks/page_end.php"; ?>

<script>
window.fizzbuzz = function (number) {
  let output = ''
  const errorMsg = 'Number must be divisible by 3 or 5'

  if (number % 3 === 0) {
    output += 'fizz'
  }
  if (number % 5 === 0) {
    output += 'buzz'
  }

  return output || errorMsg
}

window.add = function (str, delimiter = ",") {
	debugger

	if(str.endsWith(delimiter)) {
		str = str.slice(0, -1)
	}

	const arr = str.split(delimiter)

	let sum = 0;	

	for (let i = 0; i < arr.length; i++) {
		const str = parseInt(arr[i]);

		sum += str;
	}

	return sum
}

</script>