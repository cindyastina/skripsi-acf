@extends('base')

@section('content')
    <h3>Master {{$pageName}}</h3>
    <div class="mt-3">
        <button type="button" class="btn btn-success">Tambah Data</button>
        <div class="table-responsive mt-3">
            <table class="table text-center">
                <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">Ubah</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">Ubah</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td scope="row">Larry</td>
                    <td scope="row">Bird</td>
                    <td>@twitter</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">Ubah</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
