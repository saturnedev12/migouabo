@extends('admin.layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('produits.index') }}">Produits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nouveau produit</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Modifier les informations</h6>
                <form method="POST" action="{{ route('produits.update', $produit->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $produit->name }}" placeholder="Nom du produit">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="souscategorie_id">Sous Catégorie</label>
                        <select class="form-control @error('souscategorie_id') is-invalid @enderror" id="soussouscategorie_id" name="souscategorie_id">
                        <option selected disabled>Choisir une sous catégorie</option>
                        @foreach ($souscategories as $souscategorie)
                        <option value="{{ $souscategorie->id }}">{{ $souscategorie->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    @error('souscategorie_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description de la sous catégorie" rows="5">{{ old('description') ?? $produit->description }}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="description">Prix (Franc CFA) </label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Prix" name="price" value="{{ old('price') ?? $produit->price }}">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button class="btn btn-primary" type="submit">Créer</button>
                </form>

                {{-- <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Dropzone</h6>
                      <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
@endsection