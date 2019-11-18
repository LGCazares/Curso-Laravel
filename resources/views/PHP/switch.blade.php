@extends('layouts.header')
@section('content')


<div class="container" style="background-color:#2C627A;">
    <h1>hola</h1>
    <button type="button" class="btn btn-primary">Editar</button>
    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <a href="">El coste</a>
    <article>
        <p>fgdufks</p>
    </article>
</div>
<div>
    <form action="">
        <select name="" id="">
            sdew
        </select>
    </form>
    <div>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Todos los manquitos</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">El coste se la sabe </small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Edad del Coste</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Es puto?</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Agenda de Jefatura de Gobierno </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
            </div>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection