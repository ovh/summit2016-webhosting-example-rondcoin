@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $offer->title }}</div>

                <div class="panel-body">
                    <p>
                        <img  width="100%" src="/upload/{{ $offer->photo }}" alt="" />
                    </p>

                    <h4>{{ $offer->price }}€</h4>

                    <p>{{ $offer->text }}</p>
                </div>

                <div class="panel-footer"><a href="/offer">Back to offers</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
