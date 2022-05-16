@extends('homepage')

@section('main-content')
    <div class="container">
      <div class="row">
        @foreach ($trains as $train)
          <div class="col-6 text-center mt-5 mx-auto">
            <a href="{{route('trains.show',$train->id)}}">
              <img src="{{$train->url}}" alt="">
              <div class="description text-center mb-5 description rounded mx-auto border border-danger border-3">
                <h3>{{$train->agency}}</h3>
                <p>stazione di partenza:{{$train->departure_station}}. Orario: {{$train->departure_time}} </p>
                <p>stazione di arrivo:{{$train->arrival_station}}. Orario: {{$train->arrival_time}}</p>
                <p>codice treno:{{$train->train_Code}}</p>
                <p>numero di carrozze:{{$train->number_of_carriages}}</p>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
@endsection