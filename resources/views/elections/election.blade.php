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
                        <input class="form-check-input" value="Joseph Adomako" {{$userElected == "Joseph Adomako" ? "checked" : ""}} type="radio" name="candidate">
                    Joseph Adomako
                </label>
            </div>

            
            <div class="card" style="width:15rem">  
                {{--  <div class="form-check">  --}}
                <img class="card-img-top" src="image/1.jpg" alt="Africa">
                        
                <label class="card-title" for="votes" style="text-align: center;" >                               
                    <input class="form-check-input" value="Enoch Ofori Larbi" {{$userElected == "Enoch Ofori Larbi" ? "checked" : ""}} type="radio" name="candidate">
                        Enoch Ofori Larbi
                    </label>
            </div>


            <div class="card" style="width:15rem; margin-bottom: 10px;">  
                    {{--  <div class="form-check">  --}}
                        <img class="card-img-top" src="image/1.jpg" alt="Best">
                        
                        <label class="card-title" for="votes" style="text-align: center; " >
                                <input class="form-check-input" value="George Gbest"  {{$userElected == "George Gbest" ? "checked" : ""}} type="radio" name="candidate">
                            George Gbest
                        </label>
            </div>

            <div>
                <button class="btn btn-primary"  {{$userElected != null ? "disabled" : ""}} type="submit">Vote</button>
            </div>

            <button disabled="disabled"></button>
        
        </div>

    </form>

@endsection