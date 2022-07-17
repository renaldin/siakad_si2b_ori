@section('title')
Dosen
@endsection
@extends('layout/v_template_tables')
@section('page')
Halaman Detail Dosen
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">NIP : </label>
          {{$dosen->nip}}
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Dosen : </label>
          {{$dosen->nama_dosen}}
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Mata Kuliah : </label>
          {{$dosen->mata_kuliah}}
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Foto : </label>
            <img src="{{url('foto_dosen/'.$dosen->foto_dosen)}}" width="200px">
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="/dosen"><button type="button" class="btn btn-primary">Kembali</button></a>
      </div>
    </form>
  </div>
@endsection

