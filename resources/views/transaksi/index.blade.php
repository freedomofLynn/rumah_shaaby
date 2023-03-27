@extends('layouts.master')

@section('content')
<div class="content-body">
    <!-- Responsive Datatable -->
    <section id="responsive-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Data Table Transaksi</h4>
                        <div class="align-items-center ms-auto"><a href="" class="btn btn-primary">Tambah</a></div>
                    </div>
                    <div class="card-datatable">
                        <table class="dt-responsive table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode barang</th>
                                    <th>Tanggal Transfer</th>
                                    <th>Nama Pembeli</th>
                                    <th>Jumlah Trasfer</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><form action="">
                                        <div class="position-flex top-0 end-0">
                                        <a href="" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Destroy</button></div></form></th>
                                </tr>
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
