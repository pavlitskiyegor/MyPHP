<?php 
	var_dump($_POST);
	if($_POST['submit'])
	{
		$a=(int)$_POST['num1'];
		$b=(int)$_POST['num2'];
		$p=$_POST['operator'];
		var_dump("$a=".$a);
		var_dump("$b=".$b);
		//$c=$;
		if($p ='+'){
			$c = $a + $b;
		}else if($p='-'){
			$c = $a - $b;
		}else if($p='*')
			$c = $a * $b;
		else if($p=='/'){
			if($b == 0){
				echo "You can not divide by zero";
			}else{
				$c = $a / $b;
			}
				
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>�����������</title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- ������� ����� �������� -->
			<img src="logo.gif" width="187" height="29" alt="��� �������" class="logo" />
			<span class="slogan">��������� � ��� �������</span>
			<!-- ������� ����� �������� -->
		</div>

		<div id="content">
			<!-- ��������� -->
			<h1>����������� ���������</h1>
			<!-- ��������� -->
			<!-- ������� ��������� �������� -->
			
			<form action='/calc.php' method="POST">
				<label>����� 1:</label><br />
				<input name='num1' type='text' value="<?php if(isset($a)) echo $a; else echo ''; ?>"/><br />
				��������:
				<select name='operator'>
					<option value="+" selected>+</option>
					<option value="-">-</opti on>
					<option value="/">/</option>
					<option value="*">*</option>
					<option value="%">%</option>
				</select><br />
				<label>����� 2: </label><br />
				<input name='num2' type='text' value="<?php if(isset($b)) echo $b; else echo ''; ?>"/><br /><br />
				<input type='submit' value='�������' name="submit">
			</form>	
			<!-- ������� ��������� �������� -->
			<p>��������� <?php echo $c;?></p>
			
		</div>
		<div id="nav">
			<h2>��������� �� �����</h2>
			<!-- ���� -->
			<ul>
				<li><a href='index.php'>�����</a></li>
				<li><a href='about.php'>� ���</a></li>
				<li><a href='contact.php'>��������</a></li>
				<li><a href='table.php'>������� ���������</a></li>
				<li><a href='calc.php'>�����������</a></li>
			</ul>
			<!-- ���� -->
		</div>
		<div id="footer">
			<!-- ������ ����� �������� -->
			&copy; ����� ���� ���-������, 2000 - 2012
			<!-- ������ ����� �������� -->
		</div>
	</body>
</html>