@extends('layouts.app')
@section('title','Fornecedores')

@section('content') 

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-11 col-md-11 d-flex flex-column justify-content-center align-items-middle">
                    <h6 class="m-0 font-weight-bold text-primary">Listagem de fornecedores</h6>
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
                        <th scope="col">Endereço</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $f)
                            <tr>
                                <td>{{$f->nomefornecedor}}</td>     
                                <td>{{$f->endereco}}</td>
                                <td>{{$f->cidade}}</td>
                                <td>{{$f->Estado->nome}}</td>
                                <td>{{$f->telefone}}</td>
                                <td class="text-center"><a href="{{ route('admin.fornecedores.edit', ['fornecedor'=>$f->fornecedorID]) }}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a> 
                                    <form action="{{ route('admin.fornecedores.destroy', ['fornecedor'=>$f->fornecedorID]) }}" method="post">
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
                    {{$fornecedores->links()}}
                </div>     
        </div>
    </div>
    
@endsection