@extends('homepage')

@section('main-content')
    <h1 class="text-center"><a href="{{route('today')}}">Treni in Partenza Oggi</a></h1> 
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mt-5">
          <img src="{{$trains->url}}" alt="{{$trains->agency}} img">
        </div>
        <div class="col-12 text-center mb-5 description mt-2 rounded-pill">
          <h3>{{$trains->agency}}</h3>
          <p>stazione di partenza:{{$trains->departure_station}}. Orario: {{$trains->departure_time}} </p>
          <p>stazione di arrivo:{{$trains->arrival_station}}. Orario: {{$trains->arrival_time}}</p>
          <p>codice treno:{{$trains->train_Code}}</p>
          <p>numero di carrozze:{{$trains->number_of_carriages}}</p>
          <Button class="btn btn-success">Dettagli</Button>
        </div>
      </div>
    </div>
@endsection