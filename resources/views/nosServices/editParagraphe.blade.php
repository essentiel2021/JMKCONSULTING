@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('services.paragraphe', $service->id) }}" class="btn btn-primary btn-sm">Retour</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success p-2" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('services.updateParagraphe', [$paragraphe->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $paragraphe->id }}">
                        <div class="mb-3">
                            <label class="form-label">Titre</label>
                            <select name="service_id" class="form-control">
                                <option value="{{ $service->id }}" selected>{{ $service->titre }}</option>
                            </select>
                            @error('service_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea name="contenu" class="form-control" rows="4" placeholder="Entrer le paragraphe">{{ old('contenu', $paragraphe->contenu) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection