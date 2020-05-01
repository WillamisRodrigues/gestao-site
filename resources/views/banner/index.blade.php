@extends('layouts.admin.app')
@section('titulo','Banner Site')
@section('conteudo')
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="card col-md-4" id="painel-banner" style="position:absolute; display:none; top:0px; right:0px; z-index:1000; height:100vh;">
        <div class="card-body collapse show">
            <h4 class="card-title">Editar Banner </h4>
            <p class="card-subtitle">Utilize as opções para editar os banners.</p>
            <form class="mt-4">
                <div class="form-group">
                    <label class="mr-sm-2">Titulo do Banner:</label>
                    <input type="text" class="form-control" placeholder="Titulo Banner">
                </div>
                <div class="input-group">
                    <label class="mr-sm-2">Upload do Banner:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label" for="inputGroupFile04">C:\pasta\arquivo.jpeg</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                     <label class="mr-sm-2">Sobre o Banner:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="0">Ativo</option>
                        <option value="1">Inativo</option>
                    </select>
                </div>
                <div class="form-group mt-4">
                     <button type="submit" class="btn btn-success"> Salvar </button>
                     <button type="reset" class="btn btn-danger fechar"> Cancelar </button>
                </div>
            </form>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        @include('layouts.admin.header')
        @include('layouts.admin.menus.aside')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Alteração de Banners</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('banner')}}" class="text-muted">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Banners do Site</h4>
                                <div>
                                    <table id="banners" class="table table-striped table-bordered no-wrap" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Titulo</th>
                                                <th>Banner</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('layouts.admin.footer')
        </div>
    </div>
@endsection