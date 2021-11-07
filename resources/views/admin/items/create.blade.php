@extends('base')

@section('content')
    <h3>Tambah {{$pageName}}</h3>
    <hr>
    <div class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route("admin.items.store")}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Barang</label>
                            <input name="code" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input name="price" type="number" class="form-control">
                        </div>
                        <div class="mb-3 form-check">
                            <input name="is_active" type="checkbox" class="form-check-input" id="check_status">
                            <label class="form-check-label" for="check_status">Status</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
