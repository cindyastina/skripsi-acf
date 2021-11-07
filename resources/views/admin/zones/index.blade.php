@extends('base')

@section('content')
    <h3>Master {{$pageName}}</h3>
    <hr>
    <div class="mt-3">
        <a href="{{route('admin.zones.create')}}" class="btn btn-success">Tambah Data</a>
        <div class="table-responsive mt-3">
            <table class="table text-center">
                <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nama Daerah</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @if(!$zones->isEmpty())
                    @foreach($zones as $index => $zone)
                        <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$zone->name}}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.zones.edit', ['zone' => $zone->id]) }}" type="button"
                                       class="btn btn-warning">Ubah</a>
                                    {{--                                <a href="{{ route('admin.zones.show', ['zone' => $zone->id]) }}" type="button" class="btn btn-danger">Hapus</a>--}}
                                    <form method="post"
                                          action="{{ route('admin.zones.destroy', ['zone' => $zone->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Tidak ada data yang ditampilkan</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
