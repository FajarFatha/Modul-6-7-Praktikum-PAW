@extends('layouts.main')
@section('main')
<div class="container">
  <h2>Input Data Mahasiswa</h2>
  <form action="{{ route('simpandata') }}" method="post" class="form-input">
    {{ csrf_field() }}
    <div class="row">
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="text" id="email" name="email">
        </div>
    </div>
    <div class="row">
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" id="nrp" name="nrp">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat Rumah</label>
          <input type="text" id="alamat" name="alamat">
        </div>
    </div>
    <button type="submit" class="btn-submit-data">Submit Data</button>
  </form>
</div>
@endsection