@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>De acordo com seus sintomas, sugerimos que:</h1>
            <br>
                                @foreach($tratamentos as $s)
                                    @foreach($array as $a)
                                    @if ($s->id == $a)
                                        <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault" style="color: antiquewhite">
                                        {{$s->tratamento}}
                                        <br>
                                        <br>
                                        </label>
                                    </div>
                                    @endif
                                    
                                    @endforeach

                                @endforeach
                                <div class="card-footer">
                                </div>
                            </div>
                    </div>
                </form>
            
        </div>
    </div>
</div>
@endsection

