<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin — BIOTRA</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --navy: #071B35;
            --navy-soft: #0B2545;
            --gold: #D6A43A;
            --light: #F5F6F8;
            --white: #FFFFFF;
            --text-dark: #111827;
            --text-muted: #6B7280;
            --border: #E5E7EB;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--text-dark);
            min-height: 100vh;
        }
        h1, h2, h3 { font-family: 'Poppins', sans-serif; }

        .admin-topbar {
            background: var(--navy);
            padding: 0 32px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 12px rgba(0,0,0,0.2);
        }
        .admin-topbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--white);
        }
        .admin-topbar-brand img {
            height: 36px;
            width: auto;
        }
        .admin-topbar-brand span {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: var(--gold);
        }
        .admin-topbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .admin-user-info {
            color: rgba(255,255,255,0.75);
            font-size: 13px;
        }
        .admin-user-info strong {
            color: var(--white);
        }
        .admin-logout-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(214, 164, 58, 0.15);
            border: 1px solid rgba(214, 164, 58, 0.4);
            color: var(--gold);
            padding: 8px 16px;
            border-radius: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .admin-logout-btn:hover {
            background: rgba(214, 164, 58, 0.25);
        }

        .admin-content {
            max-width: 960px;
            margin: 48px auto;
            padding: 0 24px;
        }

        .admin-welcome-card {
            background: var(--white);
            border-radius: 20px;
            padding: 48px;
            box-shadow: 0 4px 24px rgba(7, 27, 53, 0.08);
            border: 1px solid var(--border);
            text-align: center;
            margin-bottom: 32px;
        }
        .admin-welcome-icon {
            width: 72px;
            height: 72px;
            background: linear-gradient(135deg, var(--navy), var(--navy-soft));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }
        .admin-welcome-icon i {
            font-size: 32px;
            color: var(--gold);
        }
        .admin-welcome-card h1 {
            font-size: 28px;
            color: var(--navy);
            margin-bottom: 12px;
        }
        .admin-welcome-card p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.7;
            max-width: 520px;
            margin: 0 auto 24px;
        }
        .admin-session-info {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--light);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 13px;
            color: var(--text-muted);
        }
        .admin-session-info i { color: var(--gold); }
        .admin-session-info strong { color: var(--navy); }

        .admin-placeholder-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .admin-placeholder-card {
            background: var(--white);
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 2px 12px rgba(7, 27, 53, 0.06);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .admin-placeholder-card-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, rgba(7,27,53,0.08), rgba(11,37,69,0.12));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .admin-placeholder-card-icon i {
            font-size: 20px;
            color: var(--navy);
        }
        .admin-placeholder-card-text h3 {
            font-size: 14px;
            color: var(--navy);
            margin-bottom: 4px;
        }
        .admin-placeholder-card-text p {
            font-size: 12px;
            color: var(--text-muted);
        }

        @media (max-width: 768px) {
            .admin-topbar { padding: 0 16px; }
            .admin-user-info { display: none; }
            .admin-content { margin: 24px auto; }
            .admin-welcome-card { padding: 32px 24px; }
            .admin-placeholder-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="admin-topbar">
        <div class="admin-topbar-brand">
            <img src="{{ asset('assets/img/logo-biotra.png') }}" alt="BIOTRA">
            <span>Admin Panel</span>
        </div>
        <div class="admin-topbar-right">
            <div class="admin-user-info">
                Login sebagai: <strong>{{ session('admin_email') }}</strong>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="admin-logout-btn">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>
        </div>
    </header>

    <main class="admin-content">

        <div class="admin-welcome-card">
            <div class="admin-welcome-icon">
                <i class="bi bi-speedometer2"></i>
            </div>
            <h1>Dashboard Admin BIOTRA</h1>
            <p>Halaman ini nantinya digunakan untuk mengelola konten website BIOTRA, termasuk informasi layanan, program kemitraan, kontak, dan kebutuhan operasional digital.</p>
            <div class="admin-session-info">
                <i class="bi bi-person-circle"></i>
                Masuk sebagai: <strong>{{ session('admin_email') }}</strong>
            </div>
        </div>

        <div class="admin-placeholder-grid">
            <div class="admin-placeholder-card">
                <div class="admin-placeholder-card-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="admin-placeholder-card-text">
                    <h3>Konten Website</h3>
                    <p>Segera hadir</p>
                </div>
            </div>
            <div class="admin-placeholder-card">
                <div class="admin-placeholder-card-icon">
                    <i class="bi bi-diagram-3"></i>
                </div>
                <div class="admin-placeholder-card-text">
                    <h3>Program Kemitraan</h3>
                    <p>Segera hadir</p>
                </div>
            </div>
            <div class="admin-placeholder-card">
                <div class="admin-placeholder-card-icon">
                    <i class="bi bi-chat-left-dots"></i>
                </div>
                <div class="admin-placeholder-card-text">
                    <h3>Pesan Konsultasi</h3>
                    <p>Segera hadir</p>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
