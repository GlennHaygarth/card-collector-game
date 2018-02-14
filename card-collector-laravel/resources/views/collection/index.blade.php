@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Overview of all cards</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($cards as $card)
                        <li>
                            <a href="/collection/{{ $card->id }}">
                                {{ $card->name }}
                            </a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
