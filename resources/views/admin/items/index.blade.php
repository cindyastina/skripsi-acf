@extends('base')

@section('content')
    <h3>Master {{$pageName}}</h3>
    <hr>
    <div class="mt-3">
        <a href="{{route('admin.items.create')}}" class="btn btn-success">Tambah Data</a>
        <div class="table-responsive mt-3">
            <table class="table text-center">
                <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @if(!$items->isEmpty())
                    @foreach($items as $index => $item)
                        @php
                            $status = $item->is_active ? "<div class='btn btn-sm btn-success'>Aktif</div>
" : "<div class='btn btn-sm btn-danger'>Tidak Aktif</div>";
                        @endphp
                        <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$item->name ?? '-'}}</td>
                            <td>{{$item->code ?? '-'}}</td>
                            <td>{{$item->price ?? '-'}}</td>
                            <td>{!! $status !!}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.items.edit', ['item' => $item->id]) }}" type="button"
                                       class="btn btn-warning">Ubah</a>
                                    {{--                                <a href="{{ route('admin.items.show', ['item' => $item->id]) }}" type="button" class="btn btn-danger">Hapus</a>--}}
                                    <form method="post"
                                          action="{{ route('admin.items.destroy', ['item' => $item->id]) }}">
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
                        <td colspan="6">Tidak ada data yang ditampilkan</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
