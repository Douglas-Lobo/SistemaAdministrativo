@extends('layouts.app')
@section('title','Cadastrar produto')

@section('content') 

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">CADASTRO</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">CADASTRAR PRODUTO</h6>
        </div>
        <div class="card-body">

            <form action="{{route('admin.produtos.store')}}" method="post">
                @csrf

                <div class="row">

                    <div class="col-lg-5">

                        <div class="form-group">
                        <input id='nome' type="text" class="form-control" placeholder='Nome' name='nomeproduto' '>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder='Descrição' name='descricao'></textarea>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Codigo de barras' name='codigobarra'>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Preço' name='precounitario'>
                        </div>

                    </div>

                    <div class="col-lg-5">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder='Estoque' name='estoque'>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Fornecedor</label>
                            <select id="inputState" class="form-control" name='fornecedorID'>
                            @foreach ($fornecedores as $f)
                                <option value='{{ $f->fornecedorID }}'>{{ $f->nomefornecedor }}</option>
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
                                @foreach ($categorias as $c)
                                <option value='{{ $c->categoriaID }}'>{{ $c->nomecategoria }}</option>
                            @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <a href='{{route('admin.produtos.index')}}' class='btn btn-secondary'>VOLTAR</a>
                <button class='btn btn-success' type="submit">CADASTRAR</button>
            </form>
        </div>
    </div>

@endsection

