@extends('almacen::layouts.master')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
        <h3>PRODUCTOS</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_content">
                    <form class="" action="{{ route('form.store') }}" novalidate>
                        @method('POST')
                        @csrf
                        <span class="section">INFORMACION GENERAL</span>
                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Unidad Solicitante:</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"
                            value="{{Auth::user()->designation->item->departament->name }}" disabled required="required" />
                        </div>
                        </div>
                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Para emplearse en:</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="occupation" data-validate-length-range="5,15"
                            type="text" /></div>
                        </div>
                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Fuente de Financiamiento</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control">
                                <option>Recursos Propios</option>
                                <option>Recursos Administrativos</option>
                            </select>
                        </div>
                        </div>
                        <span class="section">LISTA DE PRODUCTOS</span>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box table-responsive">
                                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                            <th>Cant. Pedida</th>
                                                            <th>Descripcion</th>
                                                            <th>Unidad de Medida</th>
                                                            <th>Opciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input class="form-control" name="name" type="number" required="required" placeholder="Cantidad"/></td>
                                                                <td><input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder="Descripcion"/></td>
                                                                <td><input class="form-control" name="name" type="text" required="required" disabled value="litro"/></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-12" style="text-align: center"><a href="" class="btn btn-round btn-danger btn-xs"><i class="fa fa-minus" ></i></a></div>
                                                                    </div>
                    
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td  colspan="3"></td>
                                                                <td style="text-align: center"><a href="" class="btn btn-round btn-success btn-xs" ><i class="fa fa-plus"></i></a></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type='submit' class="btn btn-primary btn-block">Guardar</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type='reset' class="btn btn-warning btn-block">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection