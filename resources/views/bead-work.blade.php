@extends('layout.main')
@section('title', 'Bead Work')
@section('content')
<section class="team-area ptb-100 pb-70">
    <div class="container">
        <div class="row">
            @if(isset($products) && count($products) > 0)
            @foreach($products as $value)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="image">
                        <a href="{{ route('beadworkdetails', ['sku' => $value->sku]) }}">
                            <img src="{{url('/')}}/public/assets/img/art/{{$value->image}}" alt="{{$value->title}}">
                    </div>
                    <div class="content">
                        <h3>{{$value->title}}</h3>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="single-team-box">
                    <h3>No records found</h3>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
