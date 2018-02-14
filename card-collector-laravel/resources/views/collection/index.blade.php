@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Add a new card</div>
                <div class="card-body">
                    <form method="POST" action="collection">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Value</label>

                            <div class="col-md-6">
                                <input id="value" type="number" min="1" max="10" class="form-control" name="value" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add card
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">Overview of all cards</div>

                <div class="card-body">
                    @foreach ($cards as $card)
                        <li>
                            <a href="/collection/{{ $card->id }}">
                                {{ $card->name }}
                            </a>
                            value: {{ $card->value }}
                        </li>
                    @endforeach
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">Your deck</div>

                <div class="card-body">
                    @foreach ($user_cards as $card)
                        <li>
                            {{ $card->name }}
                            value: {{ $card->value }}
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
