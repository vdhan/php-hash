<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>Hoàng Ân's hasher</title>
	</head>
	<body>
		<?php
		if(isset($_REQUEST['data']) && trim($_REQUEST['data']) != '')
		{
			$dat = $_REQUEST['data'];
			echo "<p>md5: " . md5($dat) . "</p>";
			echo "<p>SHA1: " . sha1($dat) . "</p>";
			echo "<p>SHA512: " . hash('sha512',$dat) . "</p>";
			echo "<p>ripemd256: " . hash('ripemd256',$dat) . "</p>";
			echo "<p>ripemd320: " . hash('ripemd320',$dat) . "</p>";
			echo "<p>whirlpool: " . hash('whirlpool',$dat) . "</p>";
			echo "<p>tiger192,4: " . hash('tiger192,4',$dat) . "</p>";
			echo "<p>snefru: " . hash('snefru',$dat) . "</p>";
			echo "<p>gost: " . hash('gost',$dat) . "</p>";
			echo "<p>haval256,5: " . hash('haval256,5',$dat) . "</p>";
			echo "<p>ROT-13: " . str_rot13($dat) . "</p>";
			echo "<p>recommend: ";
			
			$r = rand(0, 9);
			if($r == 0)
			{
				echo md5($dat) . "</p>";
			}
			else if($r == 1)
			{
				echo sha1($dat) . "</p>";
			}
			else if($r == 2)
			{
				echo hash('sha512', $dat) . "</p>";
			}
			else if($r == 3)
			{
				echo hash('haval256,5', $dat) . "</p>";
			}
			else if($r == 4)
			{
				echo hash('ripemd320', $dat) . "</p>";
			}
			else if($r == 5)
			{
				echo hash('whirlpool', $dat) . "</p>";
			}
			else if($r == 6)
			{
				echo hash('tiger192,4', $dat) . "</p>";
			}
			else if($r == 7)
			{
				echo hash('snefru', $dat) . "</p>";
			}
			else if($r == 8)
			{
				echo hash('gost', $dat) . "</p>";
			}
			else
			{
				echo hash('ripemd256', $dat) . "</p>";
			}
		}
		?>
		<form action="" method="post">
			<fieldset>
				<legend>Nhập</legend>
				<p><label for='data'>Chuỗi: </label>
				<textarea name='data' id='data' placeholder='nhập chuỗi' style="vertical-align: top" cols="121" rows="8"></textarea></p>
			</fieldset>
			<input type='submit' value='Gửi' />
			<input type='reset' value='Xóa' />
		</form>
		<p style='color: #00f; text-align: center'><strong>Copyright &copy; 2011 Hoàng Ân</strong></p>
	</body>
</html>