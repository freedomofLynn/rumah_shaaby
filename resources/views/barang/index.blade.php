@extends('layouts.master')

@section('content')
<div class="content-body">

    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Data Table Barang</h4>
                        <form action="{{ route('barang.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="align-items-center ms-auto-file">
                                    <input type="file" class="custom-file-input" id="file" name="file_barang" required>
                                    <label class="custom-file-label" for="file">Choose file...</label>
                                {{-- </div>
                                <div class="input-group-append"> --}}
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                                <div class="align-items-center ms-auto"><a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah</a></div>
                        </form>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Harga Jual</th>
                                    <th>Haga Beli</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $no => $item)
                                <tr>
                                        <th>{{$no+1}}</th>
                                        <th>{{$item->barang_id}}</th>
                                        <th>{{$item->harga_jual}}</th>
                                        <th>{{$item->harga_beli}}</th>

                                    <th>
                                        {{-- <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-info">Edit</a> --}}
                                        <form action="">
                                            <div class="position-flex top-0 end-0">
                                                <button type="submit" class="btn btn-danger">Destroy</button>
                                            </div>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Responsive Datatable -->

</div>
@endsection
