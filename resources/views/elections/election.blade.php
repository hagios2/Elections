@extends('layout')


@section('content')

<div class="title">UENR SRC ELECTIONS</div>

    <form method="POST" action="/election">
        @csrf
        <div class="form-group">

             <div class="card" style="width:15rem">  
            {{--  <div class="form-check">  --}}
                <img class="card-img-top" src="image/1.jpg" alt="Jay">
                
                <label class="card-title" for="votes" style="text-align: center;" >
                        <input class="form-check-input" type="radio" name="votes">
                    Joseph Adomako
                </label>
            </div>

            <div class="card" style="width:15rem">  
                    {{--  <div class="form-check">  --}}
                        <img class="card-img-top" src="image/1.jpg" alt="Africa">
                        
                        <label class="card-title" for="votes" style="text-align: center;" >
                                <input class="form-check-input" type="radio" name="votes">
                            Enoch Ofori Larbi
                        </label>
            </div>

            <div class="card" style="width:15rem; margin-bottom: 10px;">  
                    {{--  <div class="form-check">  --}}
                        <img class="card-img-top" src="image/1.jpg" alt="Best">
                        
                        <label class="card-title" for="votes" style="text-align: center; " >
                                <input class="form-check-input" type="radio" name="votes">
                            George Gbest
                        </label>
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Vote</button>
            </div>
        
        </div>

    </form>

@endsection