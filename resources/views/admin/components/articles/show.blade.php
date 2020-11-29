@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('admin/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
        <li class="breadcrumb-item active" aria-current="page">Détails</li>
    </ol>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xl-10 main-content pl-xl-4 pr-xl-5 col-xl-offset-1">
            <h4 id="card-group">Détail article : {{ $article->titre }}</h4>
            {{-- <p class="mb-3">Use card groups to render cards as a single, attached element with equal width and height columns. Card groups use <code>display: flex;</code> to achieve their uniform sizing.</p> --}}
            <div class="example">
                <div class="card-group">
                    <div class="card">
                    <img src="{{ url('users/assets/images/article_image/'. $article->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Nom de 'article : {{ $article->name }}</h3>
                            <p class="card-text">Contenu : <br>{!! $article->contenu !!}</p>
                            <p class="card-text"><small class="text-muted">Ajouté par {{ $article->user->name }} le {{ $article->created_at->format('d/m/Y') }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mt-3">
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-block btn-lg"><i data-feather="pen-tool"></i> Modifier l'article</a>
        </div>
        <div class="col-md-5 mt-3">
            <button type="button" class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#Modal{{ $article->id }}">
                <i data-feather="trash"></i> Supprimer
            </button>
            <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                @csrf
                @method('DELETE')
                <!-- Modal -->
                <div class="modal fade" id="Modal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle{{ $article->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalCenterTitle{{ $article->id }}">Supprimer l'article {{ strtoupper($article->titre) }}</h5>
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
            {{-- <a href="{{ route('articles.destroy', $article->id) }}" class="btn btn-danger btn-block btn-lg"><i data-feather="trash"></i> Supprimer</a> --}}
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush