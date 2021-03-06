@extends('admin.layout.master')

@push('plugin-styles')
    <link href="{{ asset('admin/assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dash') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sous catégories</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Touts les sous catégories</h6>
                {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
                @if ($souscategories->count() == 0)
                <div class="alert alert-warning text-center" role="alert"><h4>Aucune sous catégories enregistrée pour le moment</h4></div>
                @else
                    
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Sous catégorie</th>
                                <th>Catégorie</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($souscategories as $souscategorie)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $souscategorie->name }}</td>
                                <td>{{ $souscategorie->categorie->name }}</td>
                                <td style="width: 60em">{{ $souscategorie->description }}</td>
                                <td>
                                    <a href="{{ route('souscategories.show', $souscategorie->id) }}" class="btn btn-primary"><i data-feather="eye"></i></a>
                                    <a href="{{ route('souscategories.edit', $souscategorie->id) }}" class="btn btn-secondary"><i data-feather="pen-tool"></i></a>
                                    {{-- <a href="#" class="btn btn-danger"><i data-feather="trash"></i></a> --}}
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal{{ $souscategorie->id }}">
                                        <i data-feather="trash"></i>
                                    </button>
                                    <form action="{{ route('souscategories.destroy', $souscategorie->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Modal -->
                                        <div class="modal fade" id="Modal{{ $souscategorie->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle{{ $souscategorie->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalCenterTitle{{ $souscategorie->id }}">Supprimer la sous catégorie  {{ strtoupper($souscategorie->name) }}</h5>
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
                                                        <button type="submit" class="btn btn-primary"><i data-feather="trash"></i> Supprimer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <a href="{{ route('souscategories.create') }}" class="btn btn-primary btn-block btn-lg"><i data-feather="plus"></i> Ajouter une nouvelle sous catégorie</a>
    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('admin/assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('admin/assets/js/data-table.js') }}"></script>
@endpush