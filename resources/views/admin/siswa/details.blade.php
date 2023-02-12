@extends('template_backend.home')
@section('heading', 'Details Siswa')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('siswa.index') }}">Siswa</a></li>
  <li class="breadcrumb-item active">Detail Siswa</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        {{-- <div class="card-header">
            <a href="{{ route('siswa.kelas', Crypt::encrypt($siswa->kelas_id)) }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div> --}}
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <a href="" class="text-center d-block ">
                        <img src="{{ asset($siswa->foto) }}" class="card-img img-fluid img-details" alt="{{ $siswa->nama_siswa }}" style="max-width: 280px;">
                    </a>
                </div>

                {{-- <div class="col-lg-5">
                    <img src="{{ asset($siswa->foto) }}" class="card-img img-details" alt="...">
                </div> --}}

                <div class="col-md-7">
                    <h3 class="mt-0">{{ $siswa->nama_siswa }} 
                        <span class="badge badge-info-lighten text-s">{{ $siswa->kelas->nama_kelas }}</span> 
                    </h3>
            
                        <p class="mb-1">{{ $siswa->no_induk }}</p>

                        <div class="mt-4">
                            <h6 class="font-14 fw-700 ">Tempat Tanggal Lahir</h6>
                            <p>{{ $siswa->tmp_lahir }} <span>{{ date('d F Y', strtotime($siswa->tgl_lahir)) }}</span></p>
                        </div>

                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="font-14 fw-700 ">NISN</h6>
                                    <p class="text-sm lh-150">{{ $siswa->nis }}</p>
                                </div>
                                @if ($siswa->jk == 'L')
                                <div class="col-md-4">
                                    <h6 class="font-14 fw-700">Jenis Kelamin</h6>
                                    <p class="text-sm lh-150">Laki-laki</p>
                                </div>
                    @else
                    <div class="col-md-4">
                        <h6 class="font-14 fw-700">Jenis Kelamin</h6>
                        <p class="text-sm lh-150">Perempuan</p>
                    </div>
                    @endif

                              
                                <div class="col-md-4">
                                    <h6 class="font-14 fw-700">Nomor Telpon</h6>
                                    <p class="text-sm lh-150">{{ $siswa->telp }}</p>
                                </div>
                            </div>
                        </div>


                </div>
                    {{-- <h5 class="card-title card-text mb-2">Nama : {{ $siswa->nama_siswa }}</h5>
                    <h5 class="card-title card-text mb-2">No. Induk : {{ $siswa->no_induk }}</h5>
                    <h5 class="card-title card-text mb-2">NIS : {{ $siswa->nis }}</h5>
                    <h5 class="card-title card-text mb-2">Kelas : {{ $siswa->kelas->nama_kelas }}</h5>
                    @if ($siswa->jk == 'L')
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Laki-laki</h5>
                    @else
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Perempuan</h5>
                    @endif
                    <h5 class="card-title card-text mb-2">Tempat Lahir : {{ $siswa->tmp_lahir }}</h5>
                    <h5 class="card-title card-text mb-2">Tanggal Lahir : {{ date('l, d F Y', strtotime($siswa->tgl_lahir)) }}</h5>
                    <h5 class="card-title card-text mb-2">No. Telepon : {{ $siswa->telp }}</h5> --}}

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataSiswa").addClass("active");
    </script>
@endsection