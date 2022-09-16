<x-country-master>
    @section('content')
        <h1>All Countries</h1>

        @if(session('message'))
            <div class="alert alert-danger">{{session('message')}}</div>
            @elseif(session('country-created-message'))
            <div class="alert alert-success">{{session('country-created-message')}}</div>
            @elseif(session('country-updated-message'))
            <div class="alert alert-success">{{session('country-updated-message')}}</div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @foreach($countries as $country)

                            <tr>
                                <td>{{$country->id}}</td>
                                <td>{{$country->user->name}}</td>
                                <td><a href="{{route('country.edit', $country->id)}}">{{$country->name}}</a></td>
                                <td>{{$country->created_at->diffForHumans()}}</td>
                                <td>{{$country->updated_at->diffForHumans()}}</td>
                                <td><form method="post" action="{{route('country.destroy', $country->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                         @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <div class="mx-auto">
            {{$countries->links()}}
            </div>
        </div>
    @endsection

    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
{{--            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>--}}
    @endsection

</x-country-master>
