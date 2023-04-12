@extends('layouts.master')
@section('content')
<div class="content-body">
    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <h4 class="card-title">Data Table Barang</h4>
                <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <label for="barang_id" class="col-sm-3 col-form-label">kode barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="barang_id" value="{{$barang->barang_id}}" id="barang_id" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga_beli" class="col-sm-3 col-form-label">harga beli</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga_beli" value="{{$barang->harga_beli}}" id="harga_beli" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="harga_jual" class="col-sm-3 col-form-label">harga jual</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="harga_jual" value="{{$barang->harga_jual}}" id="harga_jual" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
