@extends('layouts.app')
@section('title','Inicio')

@section('content') 

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $clientes->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="offset-lg-7 mt-2">
                        <a href=" {{route('admin.clientes.index')}} " class="btn btn-sm btn-primary">ACESSAR</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Produtos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $produtos->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="offset-lg-7 mt-2">
                        <a href="{{ route('admin.produtos.index') }}" class="btn btn-sm btn-primary">ACESSAR</a>
                    </div>
                </div>
            </div>
        </div>

        
            
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Fornecedores</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $fornecedores->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck-moving fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="offset-lg-7 mt-2">
                        <a href=" {{route('admin.fornecedores.index')}} " class="btn btn-sm btn-primary">ACESSAR</a>
                    </div>
                </div>
            </div>
        </div>
     

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pedidos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pedidos->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="offset-lg-7 mt-2">
                        <a href=" {{route('admin.pedidos.index')}} " class="btn btn-sm btn-primary">ACESSAR</a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

   
@endsection