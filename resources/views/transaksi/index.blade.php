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
                        <div class="align-items-center ms-auto"><a href="" class="btn btn-primary">Export</a></div>
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
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>Experience</th>
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
