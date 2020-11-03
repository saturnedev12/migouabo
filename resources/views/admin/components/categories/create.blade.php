@extends('admin.layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Catégories</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nouvelle Catégories</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Créer une nouvelle Catégories</h6>
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nom de catégorie">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    {{-- <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Input</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option selected disabled>Select your age</option>
                        <option>12-18</option>
                        <option>18-22</option>
                        <option>22-30</option>
                        <option>30-60</option>
                        <option>Above 60</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description du produit" rows="5">{{ old('description') }}</textarea>
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