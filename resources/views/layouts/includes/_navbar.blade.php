<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
		<a href="/"><img src="{{asset('img/logo.png')}}" alt="CTIS Logo" class="img-responsive logo " style="width:80%"></a>
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		</div>
		<form class="navbar-form navbar-left">
			<div class="input-group">
			@isset($search_title)
				<input type="text" value="" name="cari" class="form-control" placeholder=" {{ $search_title }}">
				<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
			@endisset
			</div>
		</form>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/user.png')}}" class="img-circle" alt="Avatar"  > <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>