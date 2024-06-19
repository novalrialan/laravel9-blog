{{-- @extends('admin.layout.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>


</head>

<body>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Pemesanan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Data Pemesanan</a></li>
                    <li class="breadcrumb-item active">Edit Pemesanan #</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Edit Pemesanan
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="kode_lapangan" class="form-label">Kode Lapangan</label>
                                                <select id="kode_lapangan" name="kode_lapangan" class="form-select"
                                                    required>
                                                    <option>Pilih Lapangan</option>
                                                    {{-- @foreach ($lapangan as $lap) --}}
                                                    <option value="60.000">
                                                        lp-01 : 1 jam / Rp.60.000
                                                    </option>
                                                    <option value="100.000">
                                                        lp-02 : 1 jam / 100.000
                                                    </option>
                                                    <option value="70.000">
                                                        lp-03 : 1 jam / 70.000
                                                    </option>
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="tgl_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                                <input type="date" id="tgl_pemesanan" name="tgl_pemesanan"
                                                    class="form-control " value="" required>

                                            </div>
                                            <div class="mb-3">
                                                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                                                <input type="time" id="jam_mulai" name="jam_mulai"
                                                    class="form-control " value="" required>

                                            </div>
                                            <div class="mb-3">
                                                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                                                <input type="time" id="jam_selesai" name="jam_selesai"
                                                    class="form-control " value="" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="total_harga" class="form-label">Total Harga</label>
                                                <input type="number" id="total_harga" name="total_harga"
                                                    class="form-control" value="" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status_pembayaran" class="form-label">Status
                                                    Pembayaran</label>
                                                <select id="status_pembayaran" name="status_pembayaran"
                                                    class="form-select " required>
                                                    <option value="">Pilih Status</option>
                                                    <option value="Belum Bayar">
                                                        Belum Bayar</option>
                                                    <option value="Lunas">
                                                        Lunas</option>
                                                </select>

                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
        </section>
    </main>


</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan elemen dengan kode_lapangan
        var kd_lapangan = document.getElementById("kode_lapangan");

        // Menambahkan event listener untuk perubahan pada select
        kd_lapangan.addEventListener('change', function() {
            // Mendapatkan elemen total_harga
            var totalHarga = document.getElementById("total_harga");

            // Mengatur nilai awal dari total_harga berdasarkan nilai terpilih
            // var HargaAwal = totalHarga.value = kd_lapangan.value;

            // Mengatur nilai awal dari total_harga berdasarkan nilai terpilih
            var HargaAwal = parseFloat(kd_lapangan.value);
            totalHarga.value = HargaAwal; // Set nilai awal


            // Mendapatkan elemen dengan jam_mulai
            var jm_mulai = document.getElementById("jam_mulai");
            // Mendapatkan elemen dengan jam_selesai
            var jm_selesai = document.getElementById("jam_selesai");

            // Menambahkan event listener untuk perubahan pada jam_mulai dan jam_selesai
            jm_mulai.addEventListener('change', calculateTotal);
            jm_selesai.addEventListener('change', calculateTotal);


            function calculateTotal() {
                var startTime = jm_mulai.value;
                var endTime = jm_selesai.value;

                if (startTime && endTime) {
                    var start = new Date('1970-01-01T' + startTime + 'Z');
                    var end = new Date('1970-01-01T' + endTime + 'Z');

                    var duration = (end - start) / (1000 * 60 * 60); // Durasi dalam jam

                    if (duration > 0) {
                        var total = duration * HargaAwal;
                        totalHarga.value = total.toFixed(3); // Set nilai total harga
                    } else {
                        totalHarga.value = "Waktu tidak valid";
                    }
                }
            }
        });

    });
</script>

</html>
