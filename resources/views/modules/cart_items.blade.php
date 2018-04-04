<section id="cart_items">
	<div class="container">
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody><?php $giohang1 = session()->get('giohang'); ?>
					@foreach($giohang1 as $item)
					<tr>
						<td class="cart_product">
							
								<img src="{!! asset('resources/upload/'.$item->options->img) !!}" alt="" style="width: 110px;" />

						</td>
						<td class="cart_description" style="width: 36%">
							<h4><a href="">{!! $item->name !!}</a></h4>
							
						</td>
						<td class="cart_price">
							<p>{{$item->price}}$</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href=""> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="{!! $item->qty !!}" autocomplete="off" size="2">
								<a class="cart_quantity_down" href=""> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">{!! ($item->price)*($item->qty) !!}$</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
						</td>
					</tr>
					@endforeach()
				</tbody>
			</table>
		</div>
	</div>
</section>