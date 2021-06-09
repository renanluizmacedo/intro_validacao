<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastro de Cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body{
            padding: 20px;
            
        }
        .nav-bar{
            margin-bottom:20px;
        }

    </style>
    <meta name = "csrf token" content="{{csrf_token()}}">
</head>
<body>
    <main role = "main">
        <div class="row">
            <div class="container col-md-8 offset-md-2" >
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/clientes" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="nome">Nome Do Cliente</label>
                            <input type="text" id = "nome" 
                            class = "form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" 
                            name = "nome" placeholder="Nome do Cliente">
@if ($errors->has('nome'))
                                <div class="invalid-feedback">
    {{$errors->first('nome')}}
                                </div>
@endif
                        </div>

                        <div class="form-group">
                            <label for="idade">Idade do Cliente</label>
                            <input type="number" id = "idade" 
                            class = "form-control {{ $errors->has('idade') ? 'is-invalid' : ''}}"
                             name = "idade" placeholder="Idade do Cliente">
@if ($errors->has('idade'))
                            <div class="invalid-feedback">
{{$errors->first('idade')}}
                            </div>
@endif
                        </div>

                        <div class="form-group">
                            <label for="endereco">Endereço do Cliente</label>
                            <input type="text" id = "endereco" 
                            class = "form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}" 
                            name = "endereco" placeholder="Endereço do Cliente">
@if ($errors->has('endereco'))
                            <div class="invalid-feedback">
{{$errors->first('endereco')}}
                            </div>
@endif
                        </div>


                        <div class="form-group">
                            <label for="email">Email do Cliente</label>
                            <input type="text" id = "email" 
                            class = "form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" 
                            name = "email" placeholder="Email do Cliente">
@if ($errors->has('email'))
                            <div class="invalid-feedback">
{{$errors->first('email')}}
                            </div>
@endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>

                    </form>
                </div>
//@if ($errors->any())
//                    <div class="card-footer">
//
//    @foreach ($errors->all() as $error)
//                            <div class="alert alert-danger" role="alert">
//        {{$error}}
//                            </div>
//    @endforeach
//                    </div>
//@endif

            </div>
        </div>
    </main>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>