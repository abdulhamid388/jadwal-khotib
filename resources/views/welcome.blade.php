<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Khotib Jumat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .card-box {
            background: white;
            color: black;
            border-radius: 15px;
            padding: 20px;
        }

        .btn-main {
            background: #22c55e;
            border: none;
        }

        .btn-main:hover {
            background: #16a34a;
        }

        .small-text {
            font-size: 14px;
            color: #cbd5e1;
        }

        .preview-item {
            border-bottom: 1px solid #eee;
            padding: 8px 0;
        }
    </style>
</head>

<body>

<div class="container hero">

    <div class="row w-100 align-items-center">

        <!-- KIRI -->
        <div class="col-md-6">

            <h1 class="fw-bold">🕌 Jadwal Khotib Jumat</h1>

            <p class="mt-3 small-text">
                Website untuk melihat jadwal khotib Jumat secara cepat,
                rapi, dan mudah diakses oleh jamaah masjid.
            </p>

            <a href="/jadwal" class="btn btn-main btn-lg mt-3 text-white">
                Lihat Jadwal
            </a>

        </div>

        <!-- KANAN -->
        <div class="col-md-6">

            <div class="card-box">

                <h5>📅 Preview Jadwal</h5>

                <div class="mt-3">

                    <div class="preview-item">
                        🕌 Masjid Al-Ikhlas <br>
                        <small>Ust. Ahmad Fauzi</small>
                    </div>

                    <div class="preview-item">
                        🕌 Masjid An-Nur <br>
                        <small>Ust. Budi Santoso</small>
                    </div>

                    <div class="preview-item">
                        🕌 Masjid Al-Hidayah <br>
                        <small>Ust. Ali</small>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>