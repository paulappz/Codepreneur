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
                @include('sections.nav')
			</div>
		</div>
	</div>
	<div class="border-header"></div>
	<div ng-view>
    </div>
@endsection