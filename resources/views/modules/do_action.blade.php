<section id="do_action">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span>{!!(session()->get('total'));!!}$</span></li>
						<li>Tax <span>$0</span></li>
						<li>Shipping Cost <span>Free</span></li>
						<li>Total <span>{!!(session()->get('total'));!!}$</span></li>
					</ul>
						<a class="btn btn-default update" href="">Update</a>
						<a class="btn btn-default check_out" href="{!! route('checkout') !!}">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section>