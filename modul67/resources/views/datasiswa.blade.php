@extends('layouts.main')
@section('main')
<div class="container">
    <h2>Data Mahasiswa</h2>
    <div class="show-data-mahasiswa">
        @foreach($dtsiswa as $item)
        <div class="card">
            <div class="left">
                <h3>{{ $item->nama }}</h3>
                <p>{{ $item->nrp }} </p>
                <p>{{ $item->alamat }}</p>
            </div>
            <div class="right">
                <div class="btn-group">
                    <form action="{{ url('hapusdata',$item->id) }}" method="get">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn-delete"><i class="fi fi-rr-trash"></i></button>
                    </form>
                    <a href={{ url('editdata',$item->id) }} class="btn-edit"><i class="fi fi-rr-edit"></i></a>
                </div>
                <p>{{ $item->email }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

