@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('admin/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('souscategories.index') }}">Sous categories</a></li>
        <li class="breadcrumb-item active" aria-current="page">Détails</li>
    </ol>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xl-10 main-content pl-xl-4 pr-xl-5 col-xl-offset-1">
            <h4 id="card-group">Détail catégorie : {{ $souscategorie->name }}</h4>
            {{-- <p class="mb-3">Use card groups to render cards as a single, attached element with equal width and height columns. Card groups use <code>display: flex;</code> to achieve their uniform sizing.</p> --}}
            <div class="example">
                <div class="card-group">
                    <div class="card">
                    <img src="{{ url('users/assets/images/souscategorie_image/'.$souscategorie->photo ) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Sous catégorie : {{ $souscategorie->name }}</h3>
                            <h5 class="card-title">catégorie : {{ $souscategorie->categorie->name }}</h5>
                            <p class="card-text">Description : <br>{{ $souscategorie->description }}</p>
                            <p class="card-text"><small class="text-muted">Ajouté par {{ $souscategorie->user->name }} le {{ $souscategorie->created_at->format('d/m/Y') }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <a href="{{ route('souscategories.edit', $souscategorie->id) }}" class="btn btn-primary btn-block btn-lg"><i data-feather="pen-tool"></i> Modifier la Catégorie</a>
    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush