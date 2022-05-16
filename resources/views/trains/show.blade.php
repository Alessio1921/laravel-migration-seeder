@extends('homepage')

@section('main-content')
    <h1 class="text-center"><a href="{{route('today')}}">Treni in Partenza Oggi</a></h1> 
    <div class="container">
      <div class="row">
        <div class="col-8 text-center mt-5 mx-auto">
          <img src="{{$trains->url}}" alt="{{$trains->agency}} img">
          <div class="description text-center mb-5 mt-4 description rounded mx-auto border border-danger border-3">
            <h3>{{$trains->agency}}</h3>
            <p>stazione di partenza:{{$trains->departure_station}}. Orario: {{$trains->departure_time}} </p>
            <p>stazione di arrivo:{{$trains->arrival_station}}. Orario: {{$trains->arrival_time}}</p>
            <p>codice treno:{{$trains->train_Code}}</p>
            <p>numero di carrozze:{{$trains->number_of_carriages}}</p>
            <Button class="btn btn-success">Dettagli</Button>
          </div>
        </div>
      </div>
    </div>
@endsection