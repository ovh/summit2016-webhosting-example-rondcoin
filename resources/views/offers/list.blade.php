@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Offers</div>

                <div class="panel-body">
                      <ul class="list-group">
                          @foreach ( $offers as $offer)
                              <li class="list-group-item">
                                  <h3> <a href="/offer/{{ $offer->id }}">
                                    {{ $offer->title }} ({{ $offer->price }}€)
                                  </a></h3>
                                  <p><img src="/upload/{{ $offer->photo }}" height="150px" alt="" /></p>
                              </li>
                          @endforeach
                      </ul>

                      <div class="pagination"> {{ $offers->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
