@extends('layout.default')

@section('content')
<section>
	<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="contact-us animated out" data-delay="0" data-animation="fadeInUp">
				{!! Form::open(['url' => '/', 'class' => 'post-form']) !!}
					<div class="form-group">
						{!! Form::label('title','title') !!}
						{!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('description','Description') !!}
						{!! Form::text('description', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('price_per_day','Price per day') !!}
						{!! Form::text('price_per_day', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('max_persons','Max Persons') !!}
						{!! Form::text('max_persons', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('min_nights','Min Nights') !!}
						{!! Form::text('min_nights', null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
				<div class="post-form row">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="contact-info-rightbar animated out" data-delay="0" data-animation="fadeInUp">
				<div class="rightbar-heading">
					<h4>CONTACT INFORMATION</h4>
				</div>
				<ul class="contact-address clearfix">
					<li class="map-marker"> <a href="#"><i class="icon-location10"></i><span>147 Sixth Avenue San Francisco, CA</span></a></li>
					<li class="globe"> <a href="#"><i class="icon-earth"></i><span>http://www.qvrenti-real-estate.com</span></a></li>
					<li class="phone"> <a href="#"><i class="fa fa-phone"></i><span>+49 123 456 798</span></a></li>
					<li class="mail-envel"> <a href="#"><i class="icon-email4"></i><span>qvrenti-support@email.com</span></a></li>
				</ul>
				<div class="twitter-feed mrgt6x mrgb6x">
				<div class="rightbar-heading mrgb4x">
					<h4>TWITTER FEED</h4>
				</div>
				<ul class="widget-area tweet">
					<li><a href="#"><i class="fa fa-twitter"></i><span class="bold-text">@envato</span><span> Creating a new theme for the real estate section</span> <span class="active-time"># 2 hours ago</span></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i><span class="bold-text">@envato</span><span> We create awesome PSD templates for multi-pupose</span> <span class="active-time"># 8 hours ago</span></a></li>
				</ul>
			</div>
			</div>
		</div>
		</div>
	</div>
</section>
@endsection