<?php	
	require_once('./connect_db/connect.php');
	$sql = "SELECT * FROM products";
	$res = mysqli_query($connection,$sql);
?>
		<section>
			<div class="row">
				<div class="float-left col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class = "row">
								<div class="col-sm-12 col-md-12">
									<p>Filters</p>
									<hr>
									<div id = "product-filters" class="col-sm-12 col-xs-12">
										<ul style = "list-style-type: none; padding:0!important">
											<li>
												<input type="checkbox" data-category = "industrial"> Industrial
											</li>
											<li>
												<input type="checkbox" data-category = "commercial"> Commercial
											</li>
											<li>
												<input type="checkbox" data-category = "residential"> Residential
											</li>
										</ul>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				<div class="float-right col-lg-9" id = "product-list">
					<table class="table table-striped" id = "product_table">
						<thead>
							<th>Products</th>
						</thead>
						<?php
							while($product = mysqli_fetch_assoc($res)){?>
								<tr class = "product" data-category = "<?=$product['category']?>" >
									<td>
										<div class="text-center" >
											
												<img src = "<?=$product['image_dir']?>" height="173px" width="173">
											
											<h4><?=$product['name']?>(₱<?=$product['price']?>)</h4>
											<div class="float-left">
												<input type="number"  value = "1" style = "width:50px" id="qty-<?=$product['id']?>">
											</div>
											<input type = "hidden" id="image_dir-<?=$product['id']?>" value = "<?=$product['image_dir']?>">
											<input type = "hidden" id="name-<?=$product['id']?>" value = "<?=$product['name']?>">
											<input type = "hidden" id="price-<?=$product['id']?>" value = "<?=$product['price']?>">
											<div class="float-right">
												<button class="btn btn-primary add-to-cart" id = "<?=$product['id']?>">Add to cart</button>
											</div>
											<hr>
										</div>
									</td>
								</tr>
								
						<?php	
							}
						?>

					</table>
					
				</div>
				
			</div>
		</section>	
	</div>
	