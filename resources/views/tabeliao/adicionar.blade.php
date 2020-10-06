@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')

@section('conteudo')
    <div class="container">
        <br>
        <h3>Adicionar CTabelião</h3>
        <div class="row">
        <form action="{{route ('admin.tabeliao.salvar')}}" method="post" enctype="multipart/form-data">
            @csrf
                @include('admin.cursos.form')
                <button type="submit" class= "btn btn-success">Salvar</button>
            </form>
    </div>
@endsection