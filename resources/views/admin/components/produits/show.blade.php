@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('admin/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('produits.index') }}">Produit</a></li>
        <li class="breadcrumb-item active" aria-current="page">Détails</li>
    </ol>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xl-10 main-content pl-xl-4 pr-xl-5 col-xl-offset-1">
            <h4 id="card-group">Détail catégorie : {{ $produit->name }}</h4>
            {{-- <p class="mb-3">Use card groups to render cards as a single, attached element with equal width and height columns. Card groups use <code>display: flex;</code> to achieve their uniform sizing.</p> --}}
            <div class="example">
                <div class="card-group">
                    <div class="card">
                    <img src="{{ asset('/users/assets/images/products_images/'. $produit->images->first()->name) }}" class="card-img-top" alt="...">
                    {{-- <img src="{{ url('users/assets/images/products_images/'. $produit->images->first()->name) }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h3 class="card-title">Nom du produit : {{ $produit->name }}</h3>
                            <h5 class="card-title">Sous catégorie : {{ $produit->souscategorie->name }}</h5>
                            <h5 class="card-title float-right">{{ $produit->price }} Franc CFA</h5>
                            <h5 class="card-title">Catégorie : {{ $produit->souscategorie->categorie->name }}</h5>
                            <p class="card-text">Description : <br>{{ $produit->description }}</p>
                            <p class="card-text"><small class="text-muted">Ajouté par {{ $produit->user->name }} le {{ $produit->created_at->format('d/m/Y') }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-primary btn-block btn-lg"><i data-feather="pen-tool"></i> Modifier les informations</a>
    </div>
</div>
<hr>
<div class="row">
    @foreach ($produit->images as $image)
    <div class="col-md-3">
        <div class="card">
            <img src="{{ asset('/users/assets/images/product/'. $image->name) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <button type="button" class="btn btn-danger btn-block mt-3 btn-lg" data-toggle="modal" data-target="#Modal{{ $image->id }}">
                    <i data-feather="trash"></i> Supprimer
                </button>
                <form action="{{ route('images.destroy', $image->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <!-- Modal -->
                    <div class="modal fade" id="Modal{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle{{ $image->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalCenterTitle{{ $image->id }}">Suppression d'élément</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Vous êtes sur le point de supprimer cet élément. <br><br>
                                    Êtes vous sûr de vouloir le faire ? 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><h4>Close</h4></button>
                                    <button type="submit" class="btn btn-danger"><i data-feather="trash"></i> Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="container row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <div class="card-body">
            <button type="button" class="btn btn-primary btn-block mt-3 btn-lg" data-toggle="modal" data-target="#Modal1">
                <i data-feather="plus"></i> Ajout d'images
            </button>
            <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Modal -->
                <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalCenterTitle1">Ajout d'images</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <div class="input-group col-xs-12">
                                      <input type="file" name="image1" class="form-control file-upload-info" placeholder="Charger l'Image">
                                      <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                      </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <div class="input-group col-xs-12">
                                      <input type="file" name="image2" class="form-control file-upload-info" placeholder="Charger l'Image">
                                      <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                      </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <div class="input-group col-xs-12">
                                      <input type="file" name="image3" class="form-control file-upload-info" placeholder="Charger l'Image">
                                      <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                      </span>
                                    </div>
                                </div>
                                <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><h4>Close</h4></button>
                                <button type="submit" class="btn btn-primary"><i data-feather="save"></i> Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush