<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Jadwal Khotib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --dark: #0f172a;
            --bg: #f8fafc;
            --muted: #475569;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg);
            color: var(--muted);
        }

        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            background: var(--dark);
            color: white;
            padding: 30px 20px;
            overflow-y: auto;
        }

        .sidebar h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 40px;
            letter-spacing: -0.5px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            padding: 14px 16px;
            margin-bottom: 8px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .sidebar a:hover {
            background: rgba(37, 99, 235, 0.1);
            color: var(--primary);
        }

        .sidebar a.active {
            background: var(--primary);
            color: white;
        }

        .content {
            margin-left: 260px;
            padding: 40px;
            min-height: 100vh;
        }

        .btn-primary {
            background: var(--primary);
            border: none;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-warning {
            font-weight: 600;
        }

        .btn-danger {
            font-weight: 600;
        }

        .btn-secondary {
            background: #e2e8f0;
            border: none;
            color: var(--dark);
            font-weight: 600;
        }

        .btn-secondary:hover {
            background: #cbd5e1;
            color: var(--dark);
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(2, 6, 23, 0.06);
            border: 1px solid rgba(2, 6, 23, 0.04);
        }

        table thead {
            font-weight: 600;
            letter-spacing: -0.2px;
        }

        .form-label {
            font-weight: 600;
            letter-spacing: -0.2px;
        }

        h2 {
            font-size: 28px;
            font-weight: 600;
            color: var(--dark);
            letter-spacing: -0.5px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding: 20px;
            }

            .content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3><i class="bi bi-shield-check"></i> Admin</h3>
        <a href="{{ route('admin.jadwal.index') }}" class="active">
            <i class="bi bi-calendar2-week"></i>
            Jadwal Khotib
        </a>
        <a href="/">
            <i class="bi bi-house"></i>
            Kembali ke Website
        </a>
        <hr style="border-color: rgba(255, 255, 255, 0.1); margin: 20px 0;">
        <form action="{{ route('logout') }}" method="POST" style="display: block;">
            @csrf
            <button type="submit" style="background: none; border: none; color: rgba(255, 255, 255, 0.7); text-decoration: none; padding: 14px 16px; margin-bottom: 8px; border-radius: 10px; font-size: 14px; font-weight: 500; width: 100%; text-align: left; display: flex; align-items: center; gap: 12px; cursor: pointer;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='rgba(255, 255, 255, 0.7)'">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </button>
        </form>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>