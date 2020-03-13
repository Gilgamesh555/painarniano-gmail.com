@extends('layouts.app')
@section('options')
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-edit"></i>Formularios <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <!--{{$modules = session('modules')}}-->
                    @foreach ($modules as $module)
                        <li><a href="">{{$module->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</div>
@endsection
