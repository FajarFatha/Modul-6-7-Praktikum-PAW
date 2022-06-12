@extends('layouts.main')
@section('main')
<div class="container">
  <h2>Detail Data Mahasiswa</h2>
  <form action="{{ url('updatedata',$peg->id) }}" method="post" class="form-input">
    {{ csrf_field() }}
    <div class="row">
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama" value="{{ $peg->nama }}">
        </div>
        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="text" id="email" name="email" value="{{ $peg->email }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" id="nrp" name="nrp" value="{{ $peg->nrp }}">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Rumah</label>
          <input type="text" id="alamat" name="alamat" value="{{ $peg->alamat }}">
        </div>
    </div>
    <button type="submit" class="btn-submit-data">Submit Data</button>
  </form>
</div>
@endsection