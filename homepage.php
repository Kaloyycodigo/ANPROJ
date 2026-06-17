<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - MyApp</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        nav {
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #4a90d9;
            text-decoration: none;
        }

        .nav-links a {
            margin-left: 15px;
            text-decoration: none;
            font-size: 14px;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background 0.2s;
        }

        .nav-links .btn-outline {
            color: #4a90d9;
            border: 1px solid #4a90d9;
        }

        .nav-links .btn-outline:hover {
            background: #eaf2fb;
        }

        .nav-links .btn-solid {
            background: #4a90d9;
            color: white;
        }

        .nav-links .btn-solid:hover {
            background: #357abd;
        }

        /* Hero */
        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 80px 20px 60px;
        }

        .hero h1 {
            font-size: 42px;
            color: #333;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .hero h1 span {
            color: #4a90d9;
        }

        .hero p {
            font-size: 17px;
            color: #666;
            max-width: 520px;
            line-height: 1.7;
            margin-bottom: 36px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hero-buttons a {
            padding: 13px 36px;
            border-radius: 6px;
            font-size: 15px;
            text-decoration: none;
            transition: background 0.2s, box-shadow 0.2s;
        }

        .hero-buttons .primary {
            background: #4a90d9;
            color: white;
            box-shadow: 0 4px 12px rgba(74,144,217,0.35);
        }

        .hero-buttons .primary:hover {
            background: #357abd;
        }

        .hero-buttons .secondary {
            background: white;
            color: #4a90d9;
            border: 1px solid #4a90d9;
        }

        .hero-buttons .secondary:hover {
            background: #eaf2fb;
        }

        /* Features */
        .features {
            padding: 60px 40px;
            background: white;
        }

        .features h2 {
            text-align: center;
            font-size: 26px;
            color: #333;
            margin-bottom: 40px;
        }

        .features-grid {
            display: flex;
            gap: 24px;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 960px;
            margin: 0 auto;
        }

        .feature-card {
            background: #f0f2f5;
            border-radius: 10px;
            padding: 30px 24px;
            text-align: center;
            width: 260px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .feature-card .icon {
            font-size: 36px;
            margin-bottom: 14px;
        }

        .feature-card h3 {
            font-size: 17px;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 24px;
            font-size: 13px;
            color: #999;
            background: white;
            border-top: 1px solid #eee;
        }

        footer a {
            color: #4a90d9;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <a href="homepage.php" class="logo">MyApp</a>
        <div class="nav-links">
            <a href="login.php" class="btn-outline">Login</a>
            <a href="signup.php" class="btn-solid">Sign Up</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to <span>MyApp</span></h1>
        <p>A simple, secure platform to manage your account. Sign up in seconds and get started right away.</p>
        <div class="hero-buttons">
            <a href="signup.php" class="primary">Get Started</a>
            <a href="login.php" class="secondary">Login</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>Why MyApp?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon">🔒</div>
                <h3>Secure by Default</h3>
                <p>Your passwords are hashed and your data is protected with industry-standard practices.</p>
            </div>
            <div class="feature-card">
                <div class="icon">⚡</div>
                <h3>Fast & Lightweight</h3>
                <p>No bloat. Just a clean, fast experience that gets out of your way.</p>
            </div>
            <div class="feature-card">
                <div class="icon">🙌</div>
                <h3>Easy to Use</h3>
                <p>Simple sign-up and login flow. Get up and running in under a minute.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> MyApp &mdash; <a href="signup.php">Sign Up</a> &middot; <a href="login.php">Login</a></p>
    </footer>

</body>
</html>
