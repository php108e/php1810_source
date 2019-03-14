<?php
/**
 * 
 */
require_once "models/product.php";
require_once "controllers/base_controller.php";
class CartController extends BaseController
{
	public function __construct()
	{
		$this->folder = "cart";
	}

	public function add(){
		if(isset($_GET['modem'])){
			$modem = $_GET['modem'];
			$quantity = 1;

			$row[] = ProductModel::getProductByModem($modem);

			//Tạo cấu trúc mảng của mỗi phần tử trong Session Cart
			$item = array(
				//key            = value
				$row[0]['modem'] => array(
					'id'		=> $row[0]["ProductID"],
					'name' 		=> $row[0]['ProductName'],
					'price'		=> $row[0]['UnitPrice'],
					'quantity'	=> $quantity
				)
			);

			//Kiem tra SESSION cua gio hang xem da ton tai san pham muon mua hay chua
			if(!empty($_SESSION['cart'])){
				//Neu da co trong SESSION -> Chi viec tang so luong cua san pham do
				if(in_array($row[0]['modem'], array_keys($_SESSION['cart']))){
					//Tien hang duyet tung phan tu trong SESSION de kiem tra theo 'key'
					foreach ($_SESSION['cart'] as $key => $value) {
						if($row[0]['modem'] == $key){
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


			$this->render("cart");
		}
	}

	
}
?>