@extends('almacen::layouts.master')
@push('css')
    <link href="{{ asset('cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css') }}">
    <link href="{{ asset('sgs/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sgs/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sgs/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sgs/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sgs/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endpush
@push('script')
    <script src="{{ asset('sgs/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('sgs/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('sgs/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endpush
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Lista de Clasificadores</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <a  href="{{ route('sorter.create') }}" class="btn btn-round btn-success btn-block"><i class="fa fa-plus"></i> Nuevo</a>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <th width="12%">Codigo de Clasificador</th>
                                        <th width="16%">Nombre</th>
                                        <th width="16%">Descripcion</th>
                                        <th>Estado</th>
                                        <th>Anio</th>
                                        <th width="16%">Opciones</th>
                                        </tr>
                                    </thead>
                                    <!--{{ $sorters = session('sorters') }}-->
                                    <tbody>
                                    @foreach ($sorters as $sorter)
                                        <tr>
                                            <!--{{$value='btn-success'}}-->
                                            <td>{{$sorter->code_sorter}}</td>
                                            <td>{{$sorter->name}}</td>
                                            <td>{{$sorter->description}}</td>
                                            <td>
                                                @if ($sorter->status === 'inactivo')
                                                    <!--{{$value='btn-danger'}}-->    
                                                @endif
                                                <button class="btn {{$value}} btn-xs">{{$sorter->status}}</button>
                                            </td>
                                            <td>{{$sorter->year}}</td>
                                            <td>
                                                <a href="{{route('sorter.edit', $sorter->id)}}" class="btn btn-info btn-xs">
                                                    <i class="fa fa-pencil">
                                                    </i>
                                                    Editar
                                                </a>
                                                <a href="#" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o"></i>
                                                    Dar Baja
                                                </a>
                                            </td>
                                        </tr>        
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>

</div>
@endsection