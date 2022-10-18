<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div id="paginate"></div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/pagination/pagination.js'); ?>"></script>
<script src="<?= base_url('assets/js/pagination/pagination.min.js'); ?>"></script>
<script>
	$('#demo').pagination({
		dataSource: [1, 2, 3, 4, 5, 6, 7],
		callback: function(data, pagination) {
			// template method of yourself
			var html = template(data);
			dataContainer.html(html);
		}
	})
</script>

</html>
