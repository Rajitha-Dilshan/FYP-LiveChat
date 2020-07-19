<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.segikl.edu.my" target="_blank"> <img alt="SEGi" src="Segi.png" style="height:100%;"></a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-th"></span> Lobby</a></li>
			<li><a><i class="glyphicon glyphicon-education"></i> SEGi Live Chat</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Upload Photo</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>

