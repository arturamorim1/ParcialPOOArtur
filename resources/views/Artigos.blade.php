@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Artigos</div>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Titulo</th>
                      <th scope="col">Autor</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($dadosArtigos as $dados): ?>
                      <tr>
                        <th scope="row">{{$dados->titulo}}</th>
                        <td>{{$dados->autor}}</td>
                        <td>{{$dados->ano_de_publicacao}}</td>
                        <td>{{$dados->categoria}}</td>
                        </tr>
                    <?php endforeach; ?>


                  </tbody>


                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
