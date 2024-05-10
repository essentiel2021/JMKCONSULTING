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
        <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Titre</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sliders as $slider)
                    <tr>
                        <td><strong>{{ $slider->id }}</strong></td>
                        <td>{{ $slider->titre }}</td>
                        <td>
                            <a href="{{ $slider->url }}">
                                <img src="{{ $slider->thumb_url }}" width="50" height="50" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('sliders.show', $slider->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
