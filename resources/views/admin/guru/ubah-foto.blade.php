@extends('template_backend.home')
@section('heading', 'Ubah Foto')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('guru.index') }}">Guru</a></li>
  <li class="breadcrumb-item active">Ubah Foto</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">

      <form action="{{ route('guru.update-foto', $guru->id) }}"  enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset($guru->foto) }}" class="img img-responsive img-fluid" alt="" width="70%" />
                </div>
                <div class="col-md-6" style="padding-right: 6rem">
                    <h3 class="mt-0 mb-3">{{ $guru->nama_guru }}</h3>

                    <div class="form-group">
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

      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataGuru").addClass("active");
    </script>
@endsection