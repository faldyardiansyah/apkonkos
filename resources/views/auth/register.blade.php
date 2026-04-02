<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Apkonkos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #1967d2;
            --dark: #2f2f2f;
            --muted: #6b7280;
            --radius: 30px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(150% 120% at 10% 20%, #e8f2ff 0%, #cde0ff 30%, #1158d3 60%, #093880 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            width: min(1100px, 95vw);
            height: 600px;
            background: white;
            border-radius: var(--radius);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        }

        .visual {
            position: relative;
            background: url('{{ asset('image/hero.png') }}') center/cover no-repeat;
            min-height: 520px;
            border-radius: 0 50px 50px 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            padding: 130px 50px;
            color: white;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .visual::after {
            content: "";
            position: absolute;
            border-radius: 0 50px 50px 0;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.45) 100%);
        }

        .visual>* {
            position: relative;
            z-index: 2;
        }

        .visual h2 {
            margin: 0 0 14px;
            font-size: clamp(26px, 4vw, 34px);
            font-weight: 700;
            line-height: 1.2;
        }

        .visual p {
            margin: 0;
            max-width: 440px;
            color: rgba(255, 255, 255, 0.9);
        }

        .ghost-btn {
            align-self: center;
            margin-top: auto;
            padding: 12px 28px;
            border-radius: 16px;
            border: 1.5px solid rgba(255, 255, 255, 0.5);
            color: white;
            background: rgba(255, 255, 255, 0.08);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.2s ease;
        }

        .ghost-btn:hover {
            background: rgba(255, 255, 255, 0.16);
        }

        .form-wrap {
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-wrap h1 {
            margin: 0;
            text-align: center;
            font-size: 30px;
            font-weight: 700;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-top: 8px;
        }

        .form-group label {
            font-weight: 600;
            font-size: 14px;
        }

        .form-group input {
            border: 1px solid #d5d9e2;
            border-radius: 12px;
            padding: 10px 12px;
            font-size: 15px;
            outline: none;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        .form-group input:focus {
            border-color: var(--primary);
            border radius: 12px;
            box-shadow: 0 0 0 3px rgba(25, 103, 210, 0.18);
        }
        
        .input-group .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: none;
        }

        .input-group-text {
            background: white;
            border: 1px solid #d5d9e2;
            border-left: none;
            border-radius: 12px;
            color: var(--muted);
            cursor: pointer;
            padding: 10px 12px;
        }

        .btn-primary {
            width: 100%;
            margin-top: 20px;
            border-radius: 12px;
            background: #333;
            color: white;
            padding: 12px 16px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 5px 0;
            gap: 12px;
            color: var(--muted);
            font-weight: 600;
            font-size: 14px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #e5e7eb;
        }

        .social-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 12px;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 1px solid #dfe3eac8;
            padding: 10px 12px;
            border-radius: 12px;
            background: #fff;
            font-weight: 600;
            color: var(--dark);
            cursor: pointer;
            transition: box-shadow 0.2s ease;
        }

        .social-btn:hover {
            box-shadow: 0 8px 18px rgba(25, 103, 210, 0.3);
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="visual" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" id="visual-panel">
            <div>
                <h2>Selamat Datang Kembali!</h2>
                <p>Silahkan masuk untuk mengakses layanan booking kosan dan kontrakan dengan mudah.</p>
            </div>
            <a class="ghost-btn" href="{{ route('login.form') }}" id="to-login">Masuk</a>
        </div>
        <div class="form-wrap" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000">
            <h1>Daftar</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <label class="form-label fw-semibold small">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" id="pass1" class="form-control" placeholder="Masukkan Password Anda" required>
                        <span class="input-group-text" onclick="togglePass('pass1', 'icon1')">
                            <i class="bi bi-eye-slash" id="icon1"></i>
                        </span>
                    </div>
                <label class="form-label fw-semibold small">Konfirmasi Password</label>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" id="pass2" class="form-control" placeholder="Masukkan Ulang Password Anda" required>
                        <span class="input-group-text" onclick="togglePass('pass2', 'icon2')">
                            <i class="bi bi-eye-slash" id="icon2"></i>
                        </span>
                    </div>
                <button type="submit" class="btn-primary">Daftar</button>
            </form>
            <div class="divider">atau</div>
            <div class="social-row">
                <button type="button" class="social-btn">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                        alt="Google" width="18" height="18">
                    Google
                </button>
                <button type="button" class="social-btn">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg"
                        alt="Facebook" width="18" height="18">
                    Facebook
                </button>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 800
    });
</script>
<script>
        function togglePass(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("bi-eye-slash", "bi-eye");
            } else {
                input.type = "password";
                icon.classList.replace("bi-eye", "bi-eye-slash");
            }
        }

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000
        })
    @endif

    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: '{{ session('error') }}',
            showConfirmButton: true
        })
    @endif
</script>

</html>
