<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Khotib Jumat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6fb;
        }

        .wrapper {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        /* KALENDER */
        .calendar-box {
            width: 330px;
            background: white;
            padding: 15px;
            border-radius: 12px;
            border: 1px solid #ddd;
            transition: 0.3s ease;
        }

        .calendar-box.shrink {
            width: 260px;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 6px;
        }

        .day {
            text-align: center;
            padding: 8px;
            border-radius: 6px;
            cursor: pointer;
            border: 1px solid #eee;
            font-size: 12px;
            background: #fff;
        }

        .day:hover {
            background: #eef3ff;
        }

        /* DETAIL PANEL */
        .detail-box {
            flex: 1;
            background: white;
            padding: 15px;
            border-radius: 12px;
            border: 1px solid #ddd;
            display: none;
        }

        /* TAB STYLE */
        .nav-tabs .nav-link {
            font-size: 13px;
        }

        /* KHOTIB ITEM */
        .khotib-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        .khotib-item img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        .title-box {
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container mt-4">

    <h4 class="mb-3">🕌 Jadwal Khotib Jumat</h4>

    <div class="wrapper">

        <!-- KALENDER -->
        <div id="calendar" class="calendar-box">

            <div class="text-center mb-2"><b>Kalender</b></div>

            <div class="calendar-grid">
                @for($i = 1; $i <= 30; $i++)
                    <div class="day" onclick="openDate({{ $i }})">
                        {{ $i }}
                    </div>
                @endfor
            </div>

        </div>

        <!-- DETAIL -->
        <div id="detail" class="detail-box">

            <div class="title-box">
                📌 Jadwal Tanggal <span id="tanggal"></span>
            </div>

            <!-- TAB -->
            <ul class="nav nav-tabs mt-3" id="tabMenu"></ul>

            <!-- CONTENT -->
            <div class="tab-content mt-3" id="tabContent"></div>

        </div>

    </div>
</div>

<script>
function openDate(tanggal) {

    // tampilkan detail
    document.getElementById("detail").style.display = "block";
    document.getElementById("tanggal").innerText = tanggal;

    // kecilkan kalender (geser efek kanan)
    document.getElementById("calendar").classList.add("shrink");

    let tabMenu = document.getElementById("tabMenu");
    let tabContent = document.getElementById("tabContent");

    tabMenu.innerHTML = "";
    tabContent.innerHTML = "";

    // DATA KHOTIB (11 orang)
    let data = [];

    for (let i = 1; i <= 11; i++) {
        data.push({
            masjid: "Masjid " + i,
            nama: "Ustadz " + i,
            foto: "https://i.pravatar.cc/100?img=" + i
        });
    }

    data.forEach((item, index) => {

        let active = index === 0 ? "active" : "";

        // TAB BUTTON
        tabMenu.innerHTML += `
            <li class="nav-item">
                <button class="nav-link ${active}"
                    data-bs-toggle="tab"
                    data-bs-target="#tab${index}">
                    ${index + 1}
                </button>
            </li>
        `;

        // TAB CONTENT
        tabContent.innerHTML += `
            <div class="tab-pane fade show ${active}" id="tab${index}">

                <div class="khotib-item">
                    <img src="${item.foto}">
                    <div>
                        <div><b>${item.nama}</b></div>
                        <small class="text-muted">${item.masjid}</small>
                    </div>
                </div>

            </div>
        `;
    });
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>