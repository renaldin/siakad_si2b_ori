@section('title')
Dosen
@endsection
@extends('layout/v_template')
@section('page')
Edit Data Dosen
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">

     <!-- general form elements -->
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/dosen/update/{{$dosen->id_dosen}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Dosen</label>
                    <input type="text" name="id_dosen" class="form-control" id="exampleInputEmail1" value="{{$dosen->id_dosen}}" readonly>
                    <div class="text-danger">
                          @error('id_dosen')
                              {{ $message}}
                          @enderror
                    </div>
                </div>
            <div class="form-group">
              <label for="exampleInputEmail1">NIP</label>
              <input type="text" name="nip" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP" value="{{$dosen->nip}}" readonly>
              <div class="text-danger">
                    @error('nip')
                        {{ $message}}
                    @enderror
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Dosen" value="{{$dosen->nama_dosen}}">
                <div class="text-danger">
                    @error('nama_dosen')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mata Kuliah</label>
                <input type="text" name="mata_kuliah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Mata Kuliah" value="{{$dosen->mata_kuliah}}">
                <div class="text-danger">
                    @error('mata_kuliah')
                        {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto Dosen</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="foto_dosen" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
                <br>
                <div class="text-danger">
                    @error('foto_dosen')
                        {{ $message}}
                    @enderror
                </div>
              </div>
              <img src="{{url('foto_dosen/'.$dosen->foto_dosen)}}" width="100px">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    </div>
</div>
@endsection

