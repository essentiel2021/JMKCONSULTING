@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('services.index') }}" class="btn btn-primary btn-sm">Retour</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success p-2" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Entrer le titre"
                                value="{{ old('titre') }}">
                            @error('titre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" name="image_service" type="file" value="{{ old('image_service') }}">
                            @error('image_service')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
