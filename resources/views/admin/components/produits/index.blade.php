@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('admin/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produits</li>
    </ol>
</nav>

@if ($produits->count() == 0)
    <div class="alert alert-warning text-center" role="alert"><h4>Aucun prodiut n'est enregistré pour le moment</h4></div>
@else
<div class="content">
    <div class="row">
        @foreach ($produits as $produit)
        <div class="col-md-3 mt-3">
            <div class="card">
                <a href="{{ route('produits.show', $produit->id) }}">
                    <img src="{{ asset('/users/assets/images/products_images/'. $produit->images->first()->name) }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $produit->name }}</h5>
                    <p class="float-right mb-3"> {{ $produit->price }} Franc CFA</p>
                    <p class="card-text">{{ $produit->description }}</p>
                    <p class="card-text"><small class="text-muted">Ajouté par  le {{ $produit->created_at->format('d/m/Y') }}</small></p>
                    {{-- {{ $produit->user->name }} --}}
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-block mt-3 btn-lg" data-toggle="modal" data-target="#Modal{{ $produit->id }}">
                <i data-feather="trash"></i> Supprimer
            </button>
            <form action="{{ route('produits.destroy', $produit->id) }}" method="post">
                @csrf
                @method('DELETE')
                <!-- Modal -->
                <div class="modal fade" id="Modal{{ $produit->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle{{ $produit->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalCenterTitle{{ $produit->id }}">Supprimer le produit {{ strtoupper($produit->name) }}</h5>
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
        @endforeach 
    </div>
</div>
@endif

<div class="row">
    <div class="col-md-6 offset-md-3">
        <a href="{{ route('produits.create') }}" class="btn btn-primary btn-block btn-lg mt-5">Ajouter un nouveau produit</a>
    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush