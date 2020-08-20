@extends('layouts.app')
@section('title','Pedidos')
@section('content') 

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="col-lg-11 col-md-11 d-flex flex-column justify-content-center align-items-middle">
                <h6 class="m-0 font-weight-bold text-primary">Listagem de Pedidos</h6>
            </div>         
        </div>
        <div class="card-body">
            <div class="table-responsive">      
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Pedido</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Transportadora</th>
                        <th scope="col">Data pedido</th>
                        <th scope="col">Data saida</th>
                        <th scope="col">Data entrega</th>
                        <th scope="col">Status</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $p)
                            <tr>
                                <td>{{$p->pedidoID}}</td>     
                                <td>{{$p->Cliente->endereco}}</td>
                                <td>{{$p->Transportadora->nometransportadora}}</td>
                                <td>{{$p->data_pedido}}</td>
                                <td>{{$p->data_saida}}</td>
                                <td>{{$p->data_entrega}}</td> 
                                <td>
                                @switch($p->Status->nomestatus)
                                    @case("Pagamento Confirmado")
                                        <div class="alert alert-success">{{$p->Status->nomestatus}}</div>
                                        @break
                                    @case("Pagamento Pendente")
                                        <div class="alert alert-warning">{{$p->Status->nomestatus}}</div>
                                        @break
                                    @case("Cancelado pelo cliente")
                                        <div class="alert alert-danger">{{$p->Status->nomestatus}}</div>   
                                        @break
                                    @case("Cancelado pela empresa")
                                        <div class="alert alert-danger">{{$p->Status->nomestatus}}</div>
                                        @break
                                    @default
                                        <div class="alert alert-info">{{$p->Status->nomestatus}}</div> 
                                @endswitch
                                </td> 
                                <td>{{$p->PrecoReal}}</td> 
                                <td>
                                    <button type='submit' class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-plus"></i>
                                    </button> 
                                    <form action="{{ route('admin.pedidos.destroy', ['pedido'=>$p->pedidoID]) }}" method="post">
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
                    {{$pedidos->links()}}
                </div>     
        </div>
    </div>



@endsection
