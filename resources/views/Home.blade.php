@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listagem Usuarios </div>

                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">E-mail</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($dadosUsuarios as $dados): ?>
                      <tr>
                        <th scope="row">{{$dados->name}}</th>
                        <td>{{$dados->email}}</td>
                        <td>{{$dados->created_at}}</td>
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
