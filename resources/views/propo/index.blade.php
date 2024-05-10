@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ $title }}</strong> Dashboard</h3>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="{{ route('propos.create') }}" class="btn btn-primary btn-sm">Créer un slide</a>
            </div>
        </div>
        <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Titre1</th>
                    <th>Titre2</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($propos as $propo)
                    <tr>
                        <td><strong>{{ $propo->id }}</strong></td>
                        <td>{{ $propo->titre }}</td>
                        <td>{{ $propo->titre2 }}</td>
                        <td>
                            <a href="{{ $propo->url }}">
                                <img src="{{ $propo->thumb_url }}" width="50" height="50" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('propos.show', $propo->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('propos.edit', $propo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
