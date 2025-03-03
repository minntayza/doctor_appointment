<style>
    /* Global Styles */
    :root {
        --primary-gradient: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        --secondary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --text-gradient: linear-gradient(to right, #2c5282, #4299e1);
    }

    body {
        font-family: 'Inter', sans-serif;
        scroll-behavior: smooth;
    }

    /* Navigation Styles */
    .nav-container {
        background: var(--primary-gradient);
        backdrop-filter: blur(10px);
    }

    .nav-link, .register-btn {
        position: relative;
        transition: all 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: #fff;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .register-btn {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
    }

    .register-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
    }

    /* Hero Section Styles */
    .hero-section {
        background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 50% 50%, rgba(99, 102, 241, 0.05) 0%, rgba(99, 102, 241, 0) 50%);
    }

    .hero-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        background: var(--text-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: fadeInUp 1s ease-out;
    }

    .hero-text {
        font-size: 1.125rem;
        line-height: 1.8;
        animation: fadeInUp 1s ease-out 0.2s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .get-started-btn {
        background: var(--secondary-gradient);
        padding: 1rem 2.5rem;
        border-radius: 50px;
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.2);
    }

    .get-started-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.3);
    }

    /* Footer Styles */
    .footer {
        background: linear-gradient(to bottom right, #f8fafc, #f1f5f9);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
    }

    .footer-link {
        transition: all 0.3s ease;
    }

    .footer-link:hover {
        color: #3b82f6;
        transform: translateX(5px);
    }

    .social-link {
        transition: all 0.3s ease;
    }

    .social-link:hover {
        transform: translateY(-3px);
        color: #3b82f6;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
</style>
</head>
<body class="antialiased">
<!-- Navigation -->
<nav class="nav-container sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-1 flex justify-center">
                <a href="#" class="text-xl font-bold text-white">Doctor Appointment System</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/login" class="nav-link text-white px-4 py-2">Log in</a>
                <a href="/register" class="register-btn text-white px-6 py-2 rounded-full">Register</a>
            </div>
        </div>
    </div>
</nav>
