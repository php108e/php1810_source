<?php
session_start();
//Kiem tra ten khach hang da la thanh vien hay chua
if(!isset($_SESSION['logged_in']) && !isset($_SESSION['user'])){
	header("location: login.php");
}else{
	//Hien thi du lieu cua gio hang khi da dang nhap thanh cong
	if(isset($_SESSION['cart'])){
		?>
		<div>Xin chao: <?php echo $_SESSION['user'];?> </div>
		<table border="1px">
			<tr>
				<th>Ma SP</th>
				<th>Ten SP</th>
				<th>Gia</th>
				<th>So luong</th>
				<th>Thanh tien</th>
			</tr>
			<?php
			$total = 0;
			foreach($_SESSION['cart'] as $k => $v){
			?>
			<tr>
				<td><?php echo $k; ?></td>
				<td><?php echo $v['name']; ?></td>
				<td><?php echo $v['price']; ?></td>
				<td><?php echo $v['quantity']; ?></td>
				<td><?php echo $v['price']*$v['quantity']; ?></td>
			</tr>
			<?php
			$total += $v['price']*$v['quantity'];
			}
			?>
			<tr>
				<td colspan="4">Tong tien</td>
				<th><?php echo $total; ?></th>
			</tr>
			<tr>
				<td colspan="5">
					Moi ban lua chon phuong thuc thanh toan: <br>
					<input type="radio" name="chkMethod" value="1" checked> COD <br>
					<input type="radio" name="chkMethod" value="2"> Gate <br>
					<input type="radio" name="chkMethod" value="3"> Internet Banking<br>
				</td>
			</tr>
			<tr>
				<td colspan="5"><a href="order.php">Hoan tat dat hang</a></td>
			</tr>
		</table>
		<?php
	}else{
		header("location: index.php");
	}
}
?>