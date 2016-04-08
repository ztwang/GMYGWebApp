<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <title>SweetAlert</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="sweetalert-dev.js"></script>
  <link rel="stylesheet" href="sweetalert.css">
</head>
<body>
<ul class="examples">
	<li class="message">
		<div class="ui">
			<button>Try me!</button>
		</div>
	</li>
</ul>
<script>
document.querySelector('ul.examples li.message button').onclick = function(){
	clicked();
};

</script>

</body>

</html>

