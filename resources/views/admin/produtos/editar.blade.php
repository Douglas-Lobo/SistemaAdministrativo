@extends('layouts.app')
@section('title','Editar')

@section('content') 

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">EDITAR</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar - {{$produto->nomeproduto}}</h6>
        </div>
        <div class="card-body">

            <form action="{{route('admin.produtos.update', ['produto' => $produto->produtoID])}}" method="post">
                @csrf
                @method('put')

                <div class="row">

                    <div class="col-lg-5">

                        <div class="form-group">
                        <input id='nome' type="text" class="form-control" placeholder='Nome' name='nomeproduto' value='{{$produto->nomeproduto}}'>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder='Descrição' name='descricao'>{{$produto->descricao}}</textarea>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Codigo de barras' name='codigobarra' value='{{$produto->codigobarra}}'>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Preço' name='precounitario' value='{{$produto->precounitario}}' >
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Estoque' name='estoque' value='{{$produto->estoque}}'>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Fornecedor</label>
                            <select id="inputState" class="form-control" name='fornecedorID' > 
                            <option selected value='{{$produto->Fornecedor->fornecedorID}}'>{{$produto->Fornecedor->nomefornecedor}}</option>
                            @foreach ($fornecedores as $f)
                                <option value='{{ $f->fornecedorID }}' >{{ $f->nomefornecedor }}</option>
                            @endforeach
                            </select>
                        </div>
                        

                    </div>

                    <div class="col-lg-5">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name='imagempequena'>
                            <label class="custom-file-label">Produto imagem</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Categoria</label>
                            <select id="inputState" class="form-control" name='categoriaID'>
                            <option selected value='{{$produto->Categoria->categoriaID}}'>{{$produto->Categoria->nomecategoria}}</option>
                                @foreach ($categorias as $c)
                                <option value='{{ $c->categoriaID }}' >{{ $c->nomecategoria }}</option>
                            @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <a href='{{route('admin.produtos.index')}}' class='btn btn-secondary'>VOLTAR</a>
                <button class='btn btn-success' type="submit">SALVAR</button>
            </form>
        </div>
    </div>


@endsection

