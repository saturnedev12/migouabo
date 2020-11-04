@extends('admin.layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('souscategories.index') }}">Sous catégories</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modification</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Modifier les informations de la souscCatégories</h6>
                <form method="POST" action="{{ route('souscategories.update', $souscategorie->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ? old('name') : $souscategorie->name }}" placeholder="Nom de catégorie">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="categorie_id">Catégorie</label>
                        <select class="form-control @error('categorie_id') is-invalid @enderror" id="categorie_id" name="categorie_id">
                            <option selected disabled>Choisir la catégorie</option>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('categorie_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description du produit" rows="5">{{ old('description') ? old('description') : $souscategorie->description }}</textarea>
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