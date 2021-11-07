@extends('base')

@section('content')
    <h3>Ubah {{$pageName}}</h3>
    <hr>
    <div class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route("admin.zones.update", ['zone' => $zone->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Nama Daerah</label>
                            <input value="{{ $zone->name ?? null }}" name="name" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
