		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li>
						<a href="{{route('index')}}" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span>Pages</span><span class="fa arrow"></span></a>
						
					</li>
					<li>
						<a href="{{route('order.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span>Order</span><span class="fa arrow"></span></a>
						
					</li>
					
					<li>
						<a  class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">List</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="{{route('category.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>List Category</a></li>

							<li><a href="{{route('brand.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>List Brand</a></li>

							<li><a href="{{route('product.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>List Product</a></li>

							<li><a href="{{route('color.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>List Color</a></li>

							<li><a href="{{route('size.index')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>List Size</a></li>

						</ul>
					</li>
					<li>
						<a  class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Add</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="{{route('category.create')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Add Category</a></li>
							<li><a href="{{route('brand.create')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Add Brand</a></li>

							<li><a href="{{route('product.create')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Add Product</a></li>

							<li><a href="{{route('color.create')}}" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Add Color</a></li>

							<li><a href="{{route('size.create')}}" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Add Size</a></li>
						</ul>
					</li>					
				</ul>
			</div>
		</div>