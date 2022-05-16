@extends('homepage')

@section('main-content')
    <h1 class="text-center"><a href="{{route('today')}}">Treni in Partenza Oggi</a></h1> 
    <div class="container">
      <div class="row">
        @foreach ($trains as $train)
          <div class="col-4 text-center mt-5 ">
            <a href="{{route('trains.show',$train->id)}}">
              <img class="rounded" src="{{$train->url}}" alt="{{$train->agency}} img">
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
        <div class="col-12 d-flex justify-content-center">
          {{ $trains->links() }}
        </div>
      </div>
    </div>
@endsection