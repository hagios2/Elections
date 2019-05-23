@extends('layout')


@section('content')

<div class="title">UENR SRC ELECTIONS</div>

    <form method="POST" action="/elections">
        @csrf
        <div class="form-group">

             <div class="card" style="width:15rem">  
            {{--  <div class="form-check">  --}}
                <img class="card-img-top" src="image/1.jpg" alt="Jay">
                
                <label class="card-title" for="votes"  style="text-align: center;" >
                        <input class="form-check-input" value="Joseph Adomako" type="radio" name="aspirant">
                    Joseph Adomako
                </label>
            </div>

            <div class="card" style="width:15rem">  
                    {{--  <div class="form-check">  --}}
                        <img class="card-img-top" src="image/1.jpg" alt="Africa">
                        
                        <label class="card-title" for="votes" style="text-align: center;" >
                                <input class="form-check-input" value="Enoch Ofori Larbi" type="radio" name="aspirant">
                            Enoch Ofori Larbi
                        </label>
            </div>

            <div class="card" style="width:15rem; margin-bottom: 10px;">  
                    {{--  <div class="form-check">  --}}
                        <img class="card-img-top" src="image/1.jpg" alt="Best">
                        
                        <label class="card-title" for="votes" style="text-align: center; " >
                                <input class="form-check-input" value="George Gbest" type="radio" name="aspirant">
                            George Gbest
                        </label>
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Vote</button>
            </div>
        
        </div>

    </form>

@endsection