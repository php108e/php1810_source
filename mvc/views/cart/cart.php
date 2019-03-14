<div id="path" class="container">
		<div id="path-title">Home / Checkout Infomation</div> 
	</div>

	<div class="container" id="cart">
		<div class="row">
				<div class="col-xs-8">
					<div class="row">
						<div class="col-xs-12">
							<div id="cart-content">
								<table class="table table-responsive">
									<tr>
										<th>
											Image
										</th>
										<th>Name</th>
										<th>
											Price
										</th>
										<th style="text-align: center;">
											Quantity
										</th>
									</tr>
									<?php
									foreach($_SESSION['cart'] as $k => $v){
									?>
									<tr>
										<td>
											<img src="1.png" width="80px" height="80px">
										</td>
										<td style="line-height: 80px;">
											<?php echo $v['name'];?>
										</td>
										<td>
											<?php echo $v['price'];?>vnd<br>
											<s>đ60,000</s><br>
											35%
										</td>
										<td style="line-height: 80px;text-align: center;">
											<button type="button" class="btn btn-default btn-sm">
									        	<span class="glyphicon glyphicon-minus"></span>
									        </button>&nbsp;
											<?php echo $v['quantity'];?>
											&nbsp;
											<button type="button" class="btn btn-default btn-sm">
									        	<span class="glyphicon glyphicon-plus"></span>
									        </button>
										</td>
									</tr>
									<?php
									}
									?>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-4">
					<div class="row">
						<div id="content-right" class="col-xs-12">
							<div id="cart-summary">
								Order Summary
							</div>
						</div>
					</div>
				</div>
		</div>
	</div><!--end #content-->