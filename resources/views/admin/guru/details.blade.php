@extends('template_backend.home')
@section('heading', 'Detail Guru')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('guru.index') }}">Guru</a></li>
  <li class="breadcrumb-item active">Detail Guru</li>
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
        {{-- <div class="card-header">
            <a href="{{ route("guru.mapel", Crypt::encrypt($guru->mapel_id)) }}" class="btn btn-default btn-sm"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
        </div> --}}
        <div class="card-body">

            <div class="row">
                <div class="col-lg-5">
                    <a href="" class="text-center d-block ">
                        <img src="{{ asset($guru->foto) }}" class="card-img img-fluid img-details" alt="{{ $guru->nama_guru }}" style="max-width: 280px;">
                    </a>
            
                    
                </div> <!-- end col -->
                <div class="col-lg-7">
                    {{-- <form class="ps-lg-4"> --}}
                        <!-- Product title -->
                        <h3 class="mt-0">{{ $guru->nama_guru }} <span class="badge badge-info-lighten text-s">{{ $guru->mapel->nama_mapel }}</span> </h3>
                        {{-- <h5><span class="badge badge-info-lighten">{{ $guru->mapel->nama_mapel }}</span></h5> --}}
            
                        <p class="mb-1">{{ $guru->nip }}</p>
            

            
                        <!-- Product description -->
                        <div class="mt-4">
                            <h6 class="font-14 fw-700 ">Tempat Tanggal Lahir</h6>
                            <p>{{ $guru->tmp_lahir }} <span>{{ date('d F Y', strtotime($guru->tgl_lahir)) }}</span></p>
                        </div>
            
                        <!-- Product information -->
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="font-14 fw-700 ">Kode Jadwal</h6>
                                    <p class="text-sm lh-150">{{ $guru->kode }}</p>
                                </div>
                                @if ($guru->jk == 'L')
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
                                    <p class="text-sm lh-150">{{ $guru->telp }}</p>
                                </div>
                            </div>
                        </div>
            
                    {{-- </form> --}}
                </div> <!-- end col -->
            </div>
{{-- 
            <div class="row no-gutters ml-2 mb-2 mr-2">
                <div class="col-md-4">
                    <img src="{{ asset($guru->foto) }}" class="card-img img-details" alt="...">
                </div>
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-7">
                    <h5 class="card-title card-text mb-2">Nama : {{ $guru->nama_guru }}</h5>
                    <h5 class="card-title card-text mb-2">NIP : {{ $guru->nip }}</h5>
                    <h5 class="card-title card-text mb-2">No Id Card : {{ $guru->id_card }}</h5>
                    <h5 class="card-title card-text mb-2">Guru Mapel : {{ $guru->mapel->nama_mapel }}</h5>
                    <h5 class="card-title card-text mb-2">Kode Jadwal : {{ $guru->kode }}</h5>
                    @if ($guru->jk == 'L')
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Laki-laki</h5>
                    @else
                        <h5 class="card-title card-text mb-2">Jenis Kelamin : Perempuan</h5>
                    @endif
                    <h5 class="card-title card-text mb-2">Tempat Lahir : {{ $guru->tmp_lahir }}</h5>
                    <h5 class="card-title card-text mb-2">Tanggal Lahir : {{ date('l, d F Y', strtotime($guru->tgl_lahir)) }}</h5>
                    <h5 class="card-title card-text mb-2">No. Telepon : {{ $guru->telp }}</h5>
                </div>
            </div>
        </div>
    </div>
</div> --}}



@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataGuru").addClass("active");
    </script>
@endsection