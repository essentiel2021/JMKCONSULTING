@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('services.index')}}" class="btn btn-primary btn-sm">Retour</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success p-2" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('services.update', $service->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Entrer le titre" value="{{$service->titre}}">
                            @error('titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection