@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sintomas Covid-19') }}</div>

                                @foreach($tratamentos as $s)
                                    @foreach($array as $a)
                                    @if ($s->id == $a)
                                        <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$s->tratamento}}
                                        </label>
                                    </div>
                                    @endif
                                    
                                    @endforeach

                                @endforeach
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
