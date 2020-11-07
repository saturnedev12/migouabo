@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('admin/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

@endpush

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
                <form method="POST" action="{{ route('produits.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nom du produit">
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
                        <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description de la sous catégorie" rows="5">{{ old('description') }}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="description">Prix (Franc CFA) </label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Prix" name="price" value="{{ old('price') }}">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="col-md-12 stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h6 class="card-title">Image</h6>
                            <input type="file" id="myDropify" class="border @error('image') is-invalid @enderror" name="image"/>
                          </div>
                        </div>
                    </div>

                    @error('image')
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

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/select2/select2.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/dropzone/dropzone.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('admin/assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('admin/assets/js/bootstrap-maxlength.js') }}"></script>
  <script src="{{ asset('admin/assets/js/inputmask.js') }}"></script>
  <script src="{{ asset('admin/assets/js/select2.js') }}"></script>
  <script src="{{ asset('admin/assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('admin/assets/js/tags-input.js') }}"></script>
  <script src="{{ asset('admin/assets/js/dropzone.js') }}"></script>
  <script src="{{ asset('admin/assets/js/dropify.js') }}"></script>
  <script src="{{ asset('admin/assets/js/bootstrap-colorpicker.js') }}"></script>
  <script src="{{ asset('admin/assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('admin/assets/js/timepicker.js') }}"></script>
@endpush