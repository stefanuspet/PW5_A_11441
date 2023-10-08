@extends('Dashboard')
@section('content')
<!-- Main content -->
<style>
    .gambar {
        height: 100px;
        border-radius: 100px;
        border: 1px solid black;
        background-image: none;
    }

    .gambarKelas {
        width: 300px;
    }
</style>
<div class="content">
    <div class="container-fluid" style="width: 100%; padding-inline: 50px; padding-top: 20px;">
        <div class="card">
            <div class="card-body d-flex gap-3">
                <div class="rounded-4 bg-black overflow-hidden border border-black border-3" style="width: 18rem; height: 12rem;">
                    <img class="img-fluid" src="https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png" alt="Card image cap" style="height: 100%;">
                </div>
                <div class="p-0 mt-3">
                    <h2 class="m-1 fs-3 fw-bold">{{$kelas['title']}}<span class="badge bg-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eye"><i class="fa-solid fa-eye fa-2xs"></i></span></h2>
                    <p class="m-1 fw-bold">Instruktur : {{$kelas['instruktur']}}</p>
                    <p class="m-1 fw-bold">Ruang : {{$kelas['ruang']}}</p>
                    <p class="m-1 fw-bold">Total Member : {{$kelas['total_member']}}</p>
                    <p class="m-1 fw-bold">Rating:
                        <span style="color: gold;">
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                            <i class="fas fa-star fa-xs"></i>
                        </span>
                    </p>
                </div>
                <div style="margin-left: auto;">
                    <p class="fw-bold fs-7">Tanggal : {{ now()->format('l, d-F-Y') }}</p>
                    <hr>
                </div>

            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between mb-3 p-2">
            <h1 class="fs-3 fw-bold">Daftar Member</h1>
            <button type="button" class="btn btn-primary" id="liveToastBtn">
                <i class="fa-solid fa-check p-1 mr-1"></i>presensi
            </button>
        </div>
        <!-- toast -->
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fa-solid fa-check p-1 mr-1"></i> Berhasil Mempresensi Member
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>


        <div class="d-flex flex-wrap justify-content-between gap-2 p-2">
            @forelse ($member as $card)
            <div class="{{ $card['jenisCard'] === 'Gold' ? 'card border border-2 border-warning' : ($card['jenisCard'] === 'Silver' ? 'card border border-2 border-secondary' : 'card border border-2 border-dark' ) }}" style="width: 21rem;">
                <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2023/07/15/WhatsApp-Image-2023-07-14-at-151111-979003158.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="fw-bold mb-0">{{$card["nama"]}}</p>
                    <p class="mb-0">Email : {{$card["email"]}}</p>
                    <p class="mb-0">No Telp : {{$card["notelp"]}}</p>
                    <p class="mb-0">Jenis Kartu : <span class="{{ $card['jenisCard'] === 'Gold' ? 'badge rounded-pill text-bg-warning' : ($card['jenisCard'] === 'Silver' ? 'badge rounded-pill text-bg-secondary' : 'badge rounded-pill text-bg-dark' ) }}">{{$card["jenisCard"]}}</span></p>
                    <p class="mb-0">Metode Pembayaran : <span class="{{ $card['metodePembayaran'] === 'Deposit Kelas' ? 'badge text-bg-primary' : 'badge text-bg-success' }}">{{ $card['metodePembayaran'] }}</span></p>
                </div>
            </div>
            @empty
            <p class="text-center">Tidak ada member</p>
            @endforelse
        </div>
        <div class="modal fade" id="eye" tabindex="-1" aria-labelledby="eyeLabel" aria-hidden="true" data-bs-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="eyeLabel">Detail Kelas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2 class="m-1 fs-2 fw-bold">{{$eye['title']}}</h2>
                        <p class="m-1 fw-bold">Nama Instruktur : {{$eye['instruktur']}}</p>
                        <p class="m-1 fw-bold">Kode Instruktur : {{$eye['kode']}}</p>
                        <p class="m-1 fw-bold">Hari Kelas : {{ now()->format('l') }}</p>
                        <p class="m-1 fw-bold">Tanggal Kelas : {{ now()->format('d-F-Y') }}</p>
                        <p class="m-1 fw-bold">Ruang : {{$eye['ruang']}}</p>
                        <p class="m-1 fw-bold">Rating:
                            <span style="color: black;">
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection