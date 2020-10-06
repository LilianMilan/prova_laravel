
<div class="frorm-group">
    <label for="titulo">Id</label>
    <input type="text" class="form-control" id= "titulo" name="titulo" 
value="{{$curso->titulo?? ''}}">
</div>

<div class="frorm-group">
    <label for="descricao">Nome</label>
    <input type="text" class="form-control" id="valor" name="descricao"
    value="{{$curso->descricao?? ''}}">
</div>
