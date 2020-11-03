@extends('admin.layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Catégories</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modification</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Modifier les informations de la Catégories</h6>
                <form method="POST" action="{{ route('categories.update', $categorie->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ? old('name') : $categorie->name }}" placeholder="Nom de catégorie">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description du produit" rows="5">{{ old('description') ? old('description') : $categorie->description }}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn btn-primary" type="submit">Créer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection