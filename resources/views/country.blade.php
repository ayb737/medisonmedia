<x-country-master>
@section('content')
@foreach($countries as $country)
<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title">{{$country->name}}</h2>
        <p class="card-text">{{Str::limit($country->iso, '50', '.....')}}</p>
        <a href="{{route('country', $country->id)}}" class="btn btn-primary"></a>
    </div>
    <div class="card-footer text-muted">
        {{$country->created_at->diffForHumans()}}
        <a href="#">Start Bootstrap</a>
    </div>
</div>
@endforeach
@endsection
</x-country-master>

