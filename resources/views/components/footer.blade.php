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
<!-- Footer -->
<footer class="footer">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Brand -->
            <div class="space-y-4">
                <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Doctor Appointment
                </h3>
                <p class="text-gray-600">Transforming healthcare accessibility through innovation.</p>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-gray-800">Quick Links</h4>
                <div class="flex flex-col space-y-2">
                    <a href="#" class="footer-link text-gray-600">Home</a>
                    <a href="#" class="footer-link text-gray-600">About</a>
                    <a href="#" class="footer-link text-gray-600">Services</a>
                </div>
            </div>

            <!-- Legal -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-gray-800">Legal</h4>
                <div class="flex flex-col space-y-2">
                    <a href="#" class="footer-link text-gray-600">Privacy Policy</a>
                    <a href="#" class="footer-link text-gray-600">Terms of Service</a>
                    <a href="#" class="footer-link text-gray-600">Cookie Policy</a>
                </div>
            </div>

            <!-- Contact -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-gray-800">Contact</h4>
                <div class="space-y-2">
                    <p class="text-gray-600">contact@example.com</p>
                    <p class="text-gray-600">+1 (555) 123-4567</p>
                </div>
            </div>
        </div>

        <hr class="my-8 border-gray-200"/>

        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <p class="text-sm text-gray-600">© 2024 Doctor Appointment. All rights reserved.</p>
            <div class="flex space-x-6">
                <a href="#" class="social-link text-gray-600">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="#" class="social-link text-gray-600">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
                <a href="#" class="social-link text-gray-600">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>
