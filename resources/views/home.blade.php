@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sintomas Covid-19') }}</div>

                <form method="POST" action="{{ route('home.sintomas') }}">                                
                @csrf

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="card" style="width: 18rem;">
                                @foreach($sintomas as $s)
                                <div class="form-check">
                                    <input name="input_sintoma[]" class="form-check-input" type="checkbox" value="{{$s->id}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    {{$s->nome}}
                                    </label>
                                </div>
                                @endforeach
                                <div class="form-floating">
                                    <textarea name="descricao" class="form-control" placeholder="Descreva o que está sentindo..." id="floatingTextarea"></textarea>
                                </div>
                                <div class="card-footer">

                                   <button class="btn btn-primary" type="submit">Enviar</button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
