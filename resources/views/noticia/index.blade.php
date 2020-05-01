@extends('layouts.admin.app')
@section('titulo','Noticias Site')
@section('conteudo')
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="card col-md-4" id="painel-banner" style="position:absolute; top:0px; right:0px; z-index:1000; height:100vh;">
        <div class="card-body collapse show">
            <h4 class="card-title">Editar Noticia </h4>
            <p class="card-subtitle">Utilize as opções para editar os banners.</p>
            <form class="mt-4">
                <div class="form-group">
                    <label class="mr-sm-2">Titulo da Noticia:</label>
                    <input type="text" class="form-control" placeholder="Titulo Banner">
                </div>
                <div class="input-group">
                    <label class="mr-sm-2">Miniatura da Noticia:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label" for="inputGroupFile04">C:\pasta\arquivo.jpeg</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <label class="mr-sm-2">Destino:</label>
                    <input type="text" class="form-control" placeholder="url">
                </div>
                <div class="form-group mt-4">
                     <label class="mr-sm-2">Status da Noticia:</label>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Alterar Notícias</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('banner')}}" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Notícias</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <button type="button" class="btn btn-primary btn-rounded mb-4 ml-4">
                    <i data-feather="message-square" class="feather-icon"></i>    
                    Adicionar Noticia</button>
                   
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Striped rows</h4>
                                <h6 class="card-subtitle">Use <code>.table-striped</code> to add zebra-striping to any
                                    table row within the <code>&lt;tbody&gt;</code>.</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titulo</th>
                                            <th scope="col">Descricao</th>
                                            <th scope="col">Destino</th>
                                            <th scope="col">Miniatura</th>
                                            <th scope="col">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @include('layouts.admin.footer')
        </div>
    </div>
@endsection