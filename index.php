<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="jquery-3.3.1.js"></script>
	<script src="form_ajax.js"></script>
</head>
<body>
	<form action="" method="POST">

		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<input type="hidden" name="token" id="token" value="687514cd043b56c6c731f8fe26a4389b6894e294">
        <input type="hidden" name="secret" id="secret" value="2246f5439844eda72777daaff5a2cfd37feaaf5e">

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
	<div id="result"></div>
</body>
</html>