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
            <h3>Lista de Unidades</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <a  href="{{ route('unity.create') }}" class="btn btn-round btn-success btn-block"><i class="fa fa-plus"></i> Nuevo</a>
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
                                        <th>Nombre</th>
                                        <th>Anio</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <!--{{ $unities = session('unities') }}-->
                                    @foreach ($unities as $unit)
                                    <tbody>
                                        <tr @if ($unit->status === 'inactivo')
                                            style="background-color: #e32948"
                                        @endif>
                                            <td>{{$unit->name}}</td>
                                            <td>{{$unit->year}}</td>
                                            <td>{{$unit->status}}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6" style="text-align: center"><a href="{{route('unity.edit', $unit->id)}}"><i class="fa fa-eye">editar</i></a></div>
                                                    <div class="col-md-6" style="text-align: center"><a href=""><i class="fa fa-edit">dar de baja</i></a></div>
                                                </div>

                                            </td>
                                        </tr>
                                        
                                    </tbody>        
                                    @endforeach
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