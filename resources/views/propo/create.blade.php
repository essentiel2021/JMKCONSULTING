@extends('layouts.admin')
@section('content')
    {{-- <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Analytics</strong> Dashboard</h3>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('propos.index') }}" class="btn btn-primary btn-sm">Retour</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success p-2" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('propos.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="form-label">Titre 2</label>
                            <input type="text" name="titre2" class="form-control" placeholder="Entrer le titre"
                                value="{{ old('titre2') }}">
                            @error('titre2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Titre 3</label>
                            <input type="text" name="titre3" class="form-control" placeholder="Entrer le titre"
                                value="{{ old('titre3') }}">
                            @error('titre3')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Courte d'escription</label>
                            <textarea class="form-control" name="courte_description" placeholder="Courte description" rows="3">{{ old('courte_description') }}</textarea>
                            @error('courte_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input class="form-control" name="image_propo" type="file" value="{{ old('image_propo') }}">
                            @error('image_propo')
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
