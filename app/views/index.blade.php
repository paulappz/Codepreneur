@extends('layouts.master')

@section('content')
	<div id="#wrapper" class="container">
		<div class="row clearfix">
			<div class="col-sm-12">
				<div id="logo">
					<a id="logo-img">
						<img src="http://placehold.it/50x50">
					</a>
				</div>
				<div class="menu">
					<ul id="nav" class="sf-menu">
						<li><a href="#" class="current-item">Home
							<div class="nav-marker">
                                <span class="triangle">&nbsp;</span>
                            </div>
						</a></li>
						<li><a href="#">About
							<div class="nav-marker">
                                <span class="triangle">&nbsp;</span>
                            </div>
						</a></li>
						<li><a href="#">Contact
							<div class="nav-marker">
                                <span class="triangle">&nbsp;</span>
                            </div>
						</a></li>
						<li><a href="#">Login
							<div class="nav-marker">
                                <span class="triangle">&nbsp;</span>
                            </div>
						</a></li>
						<li><a href="#">Sign up
							<div class="nav-marker">
                                <span class="triangle">&nbsp;</span>
                            </div>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="border-header"></div>
	@include('slider')
@endsection