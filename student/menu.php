		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
				function menu($var)
				{
			?>
		   <ul class="nav navbar-nav">
			<li><a class="<?php if($var=='menu1'){ echo 'active'; }?>" href="student.php">Student<span class="sr-only">(current)</span></a></li>
			<li><a class="<?php if($var=='menu2'){ echo 'active'; }?>" href="staff.php">Staff</a></li>
			<li><a class="<?php if($var=='menu3'){ echo 'active'; }?>" href="dept.php">Departments</a></li>
			
			<li><a class="<?php if($var=='menu4'){ echo 'active'; }?>" href="class.php">Class Allotment</a></li>
			<li><a class="<?php if($var=='menu5'){ echo 'active'; }?>" href="#">Day Order</a></li>
			<li><a class="<?php if($var=='menu6'){ echo 'active'; }?>" href="#">Calender</a></li>
			<li><a href="logout.php">Logout</a></li>
			</ul>
			<?php
				}
			?>
		</div><!-- /.navbar-collapse -->