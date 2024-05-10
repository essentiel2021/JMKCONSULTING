@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ $title }}</strong> Dashboard</h3>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="{{ route('sliders.create') }}" class="btn btn-primary btn-sm">Créer un slide</a>
            </div>
        </div>
    </div>
@endsection
