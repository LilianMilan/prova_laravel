@extends('layout.site')

@section('titulo', 'Tabelião')

@section('conteudo')
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-9">
                <h3>Lista de Tabeliões</h3>
            </div>
            <div class="col-3">
                <a class="btn btn-success"
                   href="{{ route('admin.cursos.adicionar') }}">
                    Adicionar
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if(!empty($mensagem))
                    <div class="alert alert-success">
                        {{ $mensagem }}
                    </div>
                @endif
            </div>

        </div>
        <div class="row">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabeliaos as $tabeliao)
                        <tr>
                            <td>{{ $tabeliao->id }}</td>
                            <td>{{ $tabeliao->nome }}</td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.tabeliao.editar', $curso->id) }}">Editar</a>
                            </td>
                                <td>
                                <form action="{{ route('admin.tabeliao.deletar', $curso->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection