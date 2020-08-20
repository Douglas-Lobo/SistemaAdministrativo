@extends('layouts.app')
@section('title','Produtos')

@section('content') 

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-11 col-md-11 d-flex flex-column justify-content-center align-items-middle">
                    <h6 class="m-0 font-weight-bold text-primary">Listagem de produtos</h6>
                </div>
                <div class="col-lg-1 col-md-1">
                    <a class='btn btn-success btn-circle' href="{{route('admin.produtos.create')}}"><i class="fas fa-plus"></i></a>
                </div>
            </div>
                
        </div>
        <div class="card-body">
            <div class="table-responsive">      
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cod. Barra</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $p)
                            <tr>
                                <td>{{$p->nomeproduto}}</td>     
                                <td>{{$p->codigobarra}}</td>
                                <td>{{$p->precoreal}}</td>
                                <td>{{$p->estoque}}</td>
                                <td>{{$p->imagempequena}}</td>
                                <td>{{$p->Fornecedor->nomefornecedor}}</td> 
                                <td>{{$p->Categoria->nomecategoria}}</td> 
                                <td><a href="{{ route('admin.produtos.edit', ['produto'=>$p->produtoID]) }}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a> 
                                    <form action="{{ route('admin.produtos.destroy', ['produto'=>$p->produtoID]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type='submit' class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button> 
                                    </form>
                                    

                                </td> 
                            </tr>           
                        @endforeach
                    </tbody>
                </table>
            </div>
                <div class="offset-md-5">
                    {{$produtos->links()}}
                </div>     
        </div>
    </div>
    
@endsection