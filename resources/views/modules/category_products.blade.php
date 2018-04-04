<h2>Category</h2>
	<div class="panel-group category-products" id="accordian">
		<?php $data = DB::table('categories')->where('parent_id',0)->select('name','parent_id','id')->get()->toArray(); ?>
		@foreach($data as $item)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordian" href="#{!!$item->id!!}1">
						<span class="badge pull-right"><i class="fa fa-plus"></i></span>
						{{$item->name}} 
					</a>
				</h4>
			</div>
			<div id="{!!$item->id!!}1" class="panel-collapse collapse">
				<div class="panel-body">
					<ul>
						<?php $menu_con = DB::table('categories')->where('parent_id',$item->id)->skip(0)->take(5)->select('name','id')->get()->toArray(); ?>
						@foreach($menu_con as $item1)
						<li><a href="{{route('loaisanpham',$item1->id)}}">{!! $item1->name !!}</a></li>
						@endforeach()
					</ul>
				</div>
			</div>
		</div>
		@endforeach()
	</div>