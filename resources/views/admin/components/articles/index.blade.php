@extends('admin.layout.master')

@push('plugin-styles')
  <link href="{{ asset('admin/assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Articles</li>
    </ol>
</nav>

@if ($articles->count() == 0)
    <div class="alert alert-warning text-center" role="alert"><h4>Aucun article n'est enregistré pour le moment</h4></div>
@else
<div class="content">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-3 mt-3">
            <div class="card">
                <a href="{{ route('articles.show', $article->id) }}">
                    <img src="{{ url('users/assets/images/article_image/'. $article->image) }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $article->titre }}</h5>
                    <p class="card-text">{!! $article->contenu !!}</p>
                    <p class="card-text"><small class="text-muted">Ajouté par {{ $article->user->name }} le {{ $article->created_at->format('d/m/Y') }}</small></p>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-block mt-3 btn-lg" data-toggle="modal" data-target="#Modal{{ $article->id }}">
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
                                <h5 class="modal-title" id="ModalCenterTitle{{ $article->id }}">Supprimer le article {{ strtoupper($article->titre) }}</h5>
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
        <a href="{{ route('articles.create') }}" class="btn btn-primary btn-block btn-lg mt-5">Ajouter un nouvel article</a>
    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush