@extends('layouts.admin')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>{{ $title }}</strong> Dashboard</h3>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="{{ route('services.createParagraphe',$service->id) }}" class="btn btn-primary btn-sm">Créer un paragraphe</a>
            </div>
        </div>
        <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Paragraphe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($paragraphes as $paragraphe)
                    <tr>
                        <td><strong>{{ $paragraphe->id }}</strong></td>
                        <td>{{ $paragraphe->contenu }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('services.editParagraphe', $paragraphe->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
