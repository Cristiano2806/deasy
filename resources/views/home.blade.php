@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <h1>É muito importante preencher os campos abaixo com o que você está sentindo em detalhes:</h1>

               <form  method="POST" action="{{ route('home.sintomas') }}">                                
                @csrf      
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="card bg-dark" style="border-color: #7dc22b">
                                @foreach($sintomas as $s)
                                <div class="form-check">
                                    <input name="input_sintoma[]"class="form-check-input" type="checkbox" value="{{$s->id}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="color: antiquewhite">
                                    {{$s->nome}}
                                    </label>
                                    <br>
                                </div>                               
                                @endforeach
                                <br>
                                <h7 style="color: antiquewhite">Preencha os detalhes:</h7>
                                
                                <div class="form-floating">
                                    <textarea name="descricao" class="form-control" placeholder="Descreva o que está sentindo..." id="floatingTextarea"></textarea>
                                </div>
                                <div class="card-footer">

                                   <button class="btn btn-lg btn-solid-reg"  type="submit">Enviar</button>
                                </div>
                            </div>
                    
                </form>
           
        </div>
    </div>
</div>
@endsection

