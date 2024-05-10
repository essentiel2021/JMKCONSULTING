@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ $title }}</strong> Dashboard</h3>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">Créer un service</a>
            </div>
        </div>
        <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr>
                        <td><strong>{{ $service->id }}</strong></td>
                        <td>{{ $service->titre }}</td>
                        <td>
                            <a href="{{ route('services.show', $service->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            {{-- <a href="{{ route('services.paragraphe', $service->id) }}" class="btn btn-primary btn-sm">Voir les paragraphes</a> --}}
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
