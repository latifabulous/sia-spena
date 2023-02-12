@extends('template_backend.home')
@section('heading', 'Ubah Foto')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Ubah Foto</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <form action="{{ route('siswa.update-foto', $siswa->id) }}"  enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="row">

                <div class="col-md-6 text-center">
                    <img src="{{ asset($siswa->foto) }}" class="img img-responsive img-fluid" alt="" width="70%" />
                </div>


                <div class="col-md-6" style="padding-right: 6rem">
                    <h3 class="mt-0 mb-3">{{ $siswa->nama_siswa }}</h3>


                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input @error('foto') is-invalid @enderror" id="foto">
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
            <button name="submit" class="btn btn-primary mt-3"><i class="nav-icon fas fa-upload"></i> &nbsp; Upload</button>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        {{-- <div class="card-footer">
            <a href="{{ route("siswa.index") }}" class="btn btn-default"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
            <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-upload"></i> &nbsp; Upload</button>
        </div> --}}
      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataSiswa").addClass("active");
    </script>
@endsection