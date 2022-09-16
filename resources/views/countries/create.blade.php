<x-country-master>
    @section('content')
        <h1>Create</h1>
                <form method="post" action="{{route('country.store')}}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       id="name"
                                       aria-describedby=""
                                       placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="ISO">ISO</label>
                                <input type="text"
                                       ISO="ISO"
                                       class="form-control"
                                       id="ISO"
                                       aria-describedby=""
                                       placeholder="Enter ISO">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    @endsection
</x-country-master>
