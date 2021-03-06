<?php
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$quantity = 1;
	//Lấy dữ liệu của bản ghi từ CSDL theo 'id'
	require "database.php";
	$sql = "SELECT ProductName, Modem, UnitPrice FROM products WHERE ProductID=$id";
	$stmt = $db->prepare($sql);
	$stmt->execute();

	$result = $stmt->fetch(PDO::FETCH_ASSOC);

	//Tạo 1 mảng để chứa dữ liệu từ câu truy vấn
	$row[] = $result;
	// echo "<pre>";
	// print_r($row);

	//Tạo cấu trúc mảng của mỗi phần tử trong Session Cart
	$item = array(
		//key            = value
		$row[0]['Modem'] => array(
			'id'		=> $id,
			'name' 		=> $row[0]['ProductName'],
			'price'		=> $row[0]['UnitPrice'],
			'quantity'	=> $quantity
		)
	);

	//Kiem tra SESSION cua gio hang xem da ton tai san pham muon mua hay chua
	if(!empty($_SESSION['cart'])){
		//Neu da co trong SESSION -> Chi viec tang so luong cua san pham do
		if(in_array($row[0]['Modem'], array_keys($_SESSION['cart']))){
			//Tien hang duyet tung phan tu trong SESSION de kiem tra theo 'key'
			foreach ($_SESSION['cart'] as $key => $value) {
				if($row[0]['Modem'] == $key){
					$_SESSION['cart'][$key]['quantity'] += 1;
				}
			}
		}else{
			//Neu san pham can mua chua co trong gio hang -> Gop san pham moi vao SESSION
			$_SESSION['cart'] = array_merge($_SESSION['cart'],$item);
		}
	}else{
		//Neu SP muon mua chua co trong SESSION -> Them moi phan tu vao SESSION
		$_SESSION['cart'] = $item;
	}

	//Bieu dien gio hang ra dinh dang HTML
	?>
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
			<td colspan="3"><a href="index.php">Tiep tuc mua hang</a></td>
			<td colspan="2"><a href="checkout.php">Dat hang</a></td>
		</tr>
	</table>
	<?php

}else{

}








