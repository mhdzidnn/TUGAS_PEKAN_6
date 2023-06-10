@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('lists.create') }}" class="btn btn-primary">Tambahkan barang</a>
                </div>
            </div>
        </div>

        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th></th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($barang as $list)
                            <tr>
                                <td>{{ $list->kode_barang }}</td>
                                <td>{{ $list->nama_barang }}</td>
                                <td>{{ $list->harga_barang }}</td>
                                <td>{{ $list->deskripsi_barang }}</td>
                                <td>{{ $list->satuan->nama_satuan }}</td>
                                <td>@include('list.action')
                                    {{-- ACTIONS SECTION --}}
                                    {{-- <div class="d-flex">
                                        <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                        <a href="{{ route('barang.edit', ['list' => $list->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                        <div>
                                            <form action="{{ route('lists.destroy',
                                            ['list' => $list->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                {{-- <tbody>
                    <tr>
                        <td>21pqzs</td>
                        <td>Casing HP</td>
                        <td>25.000</td>
                        <td>Toko Mahendra Elektronik</td>
                        <td>1 Buah</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>89uhzqw</td>
                        <td>Kompor Portable</td>
                        <td>97.000</td>
                        <td>Toko Kitchen Mama</td>
                        <td>1 Buah</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <div>
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr> --}}
                {{-- </tbody> --}}
            </table>
        </div>
    </div>
@endsection
