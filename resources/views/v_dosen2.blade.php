@section('title')
Dosen
@endsection
@extends('layout/v_template')
@section('page')
Halaman Dosen
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
     @foreach ($dosen as $data)
     NIP : {{ $data['nip']}}<br>
     Nama : {{ $data['nama_dosen']}}<br>
     Mata Kuliah : {{ $data['matkul']}}<br>
     <br>
     @endforeach
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
@endsection

