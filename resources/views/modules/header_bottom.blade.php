<div class="header-bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<?php  
					// $sqlCatMenu ="SELECT * FROM tbl_category WHERE `status` = 1";
					// $resultMenu = mysqli_query($conn,$sqlCatMenu);
				?>
				<div class="mainmenu pull-left">
					<ul class="nav navbar-nav collapse navbar-collapse">
						<li><a href="index.php" class="active">Home</a></li>
						<?php  
							//while ($rowMenu = mysqli_fetch_assoc($resultMenu)) {
						?>
							<li>
								<a href="index.php?view=shop">Shop</a>
                            </li> 
                        <?php //} ?>
						<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.php">Blog List</a></li>
								<li><a href="blog-single.php">Blog Single</a></li>
                            </ul>
                        </li> 
						<li><a href="404.php">404</a></li>
						<li><a href="contact-us.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="search_box pull-right">
					<input type="text" placeholder="Search"/>
				</div>
			</div>
		</div>
	</div>
</div>