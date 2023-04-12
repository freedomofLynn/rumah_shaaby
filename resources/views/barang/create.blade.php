@extends('layouts.master')
@section('content')
<div class="content-body">
    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
        <div class="col-12">
                <h4 class="card-title">Data Table Barang</h4>
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="row mb-3">
                        <label for="barang_id" class="col-sm-3 col-form-label">kode barang</label>
                        <div class="col-sm-10">
                            <input type="" class="form-control" name="barang_id" id="barang_id" required>
                        </div>
                    </div> --}}
                    <div class="row mb-3">
                        <label for="harga_beli" class="col-sm-3 col-form-label">harga beli</label>
                        <div class="col-sm-10">
                            <input type="" class="form-control" name="harga_beli" id="harga_beli" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga_jual" class="col-sm-3 col-form-label">harga jual</label>
                        <div class="col-sm-10">
                            <input type="" class="form-control" name="harga_jual" id="harga_jual" required>
                        </div>
                    </div>
                    {{-- <label for="barang_id">Barang:</label>
                    <select name="barang_id">
                        @foreach($data as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->barang_id }}</option>
                        @endforeach
                    </select> --}}
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!--/ Responsive Datatable -->

</div>
@endsection
