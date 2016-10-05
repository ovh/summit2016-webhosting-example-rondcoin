@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My offers</div>

                <div class="panel-body">
                    <a href="{{ url('/offer/create')}}" class="btn btn-primary">Publish an offer</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Price</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $offers as $offer)
                                <tr>
                                    <td><a href="{{ url('/offer', $offer->id )}}">{{ $offer->title }}</a></td>
                                    <td>{{ $offer->price }}€</td>
                                    <td>
                                        <form action="/offer/{{ $offer->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button>
                                              <span class="glyphicon glyphicon-trash"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="pagination"> {{ $offers->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
