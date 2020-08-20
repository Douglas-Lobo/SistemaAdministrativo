@extends('layouts.app')
@section('title','Clientes')

@section('content') 

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-11 col-md-11 d-flex flex-column justify-content-center align-items-middle">
                    <h6 class="m-0 font-weight-bold text-primary">Listagem de Clientes</h6>
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
                        <th scope="col">Endereco</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $c)
                            <tr>
                                <td>{{$c->nomecompleto}}</td>     
                                <td>{{$c->enderecocompleto}}</td>
                                <td>{{$c->cidade}}</td>
                                <td>{{$c->Estado->nome}}</td>
                                <td>{{$c->cep}}</td>
                                <td>{{$c->telefonecompleto}}</td> 
                                <td>{{$c->email}}</td> 
                                <td><a href="{{ route('admin.produtos.edit', ['produto'=>$c->clienteID]) }}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a> 
                                    <form action="{{ route('admin.produtos.destroy', ['produto'=>$c->clienteID]) }}" method="post">
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
                    {{$clientes->links()}}
                </div>     
        </div>
    </div>
    
@endsection