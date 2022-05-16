@extends('homepage')

@section('main-content')
    <div class="container">
      <div class="row">
        @foreach ($trains as $train)
          <a href="{{route('trains.show',$train->id)}}">
            <div class="col-12 text-center mt-5">
              <img src="{{$train->url}}" alt="">
            </div>
            <div class="col-12 text-center mb-5 description mt-2 rounded-pill">
              <h3>{{$train->agency}}</h3>
              <p>stazione di partenza:{{$train->departure_station}}. Orario: {{$train->departure_time}} </p>
              <p>stazione di arrivo:{{$train->arrival_station}}. Orario: {{$train->arrival_time}}</p>
              <p>codice treno:{{$train->train_Code}}</p>
              <p>numero di carrozze:{{$train->number_of_carriages}}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
@endsection