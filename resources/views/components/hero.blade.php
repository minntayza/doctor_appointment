<style>
    .hero-section {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ec 100%);
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
        background: linear-gradient(45deg, rgba(66, 153, 225, 0.05) 0%, rgba(129, 230, 217, 0.05) 100%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    h1 {
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.2;
        background: linear-gradient(to right, #2c5282, #4299e1);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1.5rem;
        animation: fadeInUp 1s ease-out;
    }

    .hero-text {
        font-size: 1.125rem;
        line-height: 1.8;
        color: #4a5568;
        margin-bottom: 2rem;
        animation: fadeInUp 1s ease-out 0.2s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .hero-image {
        transform: translateY(20px);
        animation: float 6s ease-in-out infinite;
        filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.1));
    }

    .get-started-btn {
        position: relative;
        padding: 1rem 2.5rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
        text-transform: uppercase;
        border-radius: 50px;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        display: inline-block;
        text-decoration: none;
    }

    .get-started-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 100%);
        transform: translateX(-100%);
        transition: transform 0.5s ease;
    }

    .get-started-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    .get-started-btn:hover::before {
        transform: translateX(100%);
    }

    .get-started-btn:active {
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
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
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }
</style>

<div class="hero-section">
    <div class="container px-6 py-24 mx-auto">
        <div class="items-center lg:flex lg:flex-wrap">
            <div class="w-full lg:w-1/2 lg:order-1">
                <div class="hero-content lg:max-w-lg">
                    <h1 class="mb-8">
                        Doctor Appointment System
                    </h1>
                    <p class="hero-text">
                        Experience a new era of healthcare efficiency with our state-of-the-art Hospital Management System. Designed to streamline every aspect of hospital operations, from patient registration and appointments to billing and reporting, our platform empowers healthcare providers to focus on what truly matters—delivering exceptional patient care.
                    </p>
                    <div class="mt-8">
                        <a href="/register" class="get-started-btn">
                            Get Started
                            <svg class="inline-block ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:flex items-center justify-center w-full mt-10 lg:mt-0 lg:w-1/2 lg:order-2">
                <img src="./images/Hospital.svg" alt="Hospital.svg" class="hero-image w-full h-auto max-w-2xl">
            </div>
        </div>
    </div>
</div>
