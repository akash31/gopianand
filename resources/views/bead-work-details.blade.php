@extends('layout.main')
@section('title', $title)
@section('content')
    @foreach($productDetails as $value)
        @if($value->order_n === 0)
			@if(empty($value->char) && in_array($value->sku, ['elephant']))
				<section class="insurance-details-area">
			@else
				<section class="insurance-details-area ptb-100">
			@endif
                <div class="container">
                    <div class="insurance-details-header">
						@if(!empty($value->image))
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-12">
									<div class="content">
										@if(!empty($value->char))
											<h2>{{$value->char}} - <u> {{$value->title}} </u></h2>										
										@elseif(!in_array($value->sku, ['elephant']))
											 <h2><u>{{$value->title}}</u></h2>
										@endif

										<p>{!! html_entity_decode($value->details) !!}</p>
									</div>
								</div>
								@if(!empty($value->image))
									<div class="col-lg-6 col-md-12">
										<div class="image text-center">
											<img src="{{url('/')}}/public/assets/img/abc/{{$value->image}}" alt="{{$value->title}}">
										</div>
									</div>
								@endif
								@if(!empty($value->other_details))
								<div class="col-lg-12">
									<div class="insurance-details-header">
										<br>
										{!! html_entity_decode($value->other_details) !!}
									</div>
								</div>
								@endif
							</div>
						@else
							<div class="row align-items-center">
								<h2>{{$value->char}} - <u> {{$value->title}} </u></h2>
								<p align="justify">{!! html_entity_decode($value->details) !!}</p>
							</div>
												
						@endif
                    </div>
                </div>
            </section>
		@elseif(!empty($value->image2)))
			@if(in_array($value->sku, ['barsakh', 'chakla']))
				<section class="insurance-details-area pb-100">
			@else
				<section class="insurance-details-area ptb-100">
			@endif
				<div class="container">
					<div class="insurance-details-header">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-12">
								<div class="content">
									@if(!empty($value->char) && !in_array($value->sku, ['handfan']))
										<h2>{{$value->char}} - <u>{{$value->title}} ({{$value->order_n}} & {{$value->order_n + 1}})</u></h2>										
									@elseif(in_array($value->sku, ['handfan']))
										<h2><u>{{$value->char}}</u>({{$value->order_n}} & {{$value->order_n + 1}})</h2>
									@else
										<h2><u>{{$value->title}}</u>({{$value->order_n}} & {{$value->order_n + 1}})</h2>
									@endif
									<p>{!! html_entity_decode($value->details) !!}</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="image text-center">
								<img src="{{url('/')}}/public/assets/img/abc/{{$value->image}}" alt="{{$value->title}}">
									<h2><strong>({{$value->order_n}})</strong> <h2><br>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<br>{!! html_entity_decode($value->other_details) !!}
							</div>
							@if(!empty($value->image2))
								<div class="col-lg-6 col-md-12">
									<div class="image text-center">
										<img src="{{url('/')}}/public/assets/img/abc/{{$value->image2}}" alt="{{$value->title}}">
										<h2><strong>({{$value->order_n + 1}})</strong> <h2><br>
									</div>
								</div>	
							@endif					
						</div>
					</div>
				</div>
			</section>
        @else
            @if(!empty($value->char) && in_array($value->sku, ['chopat', 'kankotri']))
				<section class="insurance-details-area ptb-100">
			@elseif(in_array($value->sku, ['chakla']))
				<section class="insurance-details-area pb-100">
			@else
				<section class="insurance-details-area">
			@endif
                <div class="container">
                    <div class="insurance-details-header">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="content">
									<h2><u>{{$value->title}}</u> ({{$value->order_n}})</h2>
                                    <p>{!! html_entity_decode($value->details) !!}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="image text-center">
                                    <img src="{{url('/')}}/public/assets/img/abc/{{$value->image}}" alt="{{$value->title}}">
                                    <h2><strong>({{$value->order_n}})</strong>
                                        <h2><br>
                                </div>
                            </div>
							@if(!empty($value->other_details))
								<div class="col-lg-12">
									<div class="insurance-details-header">
										<br>
										{!! html_entity_decode($value->other_details) !!}
									</div>
								</div>
							@endif
                        </div>
                    </div>
            </section>
        @endif
    @endforeach
	<div class="pb-100"></div>
@endsection