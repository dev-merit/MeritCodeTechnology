<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Automation Guidance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
        }

        body {
            margin: 0;
            height: 100%;
            overflow-y: auto;
            scroll-snap-type: y mandatory;
        }

        section {
            scroll-snap-align: start;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: transform 0.8s ease-in-out;
        }

        section:not(:first-child) {
            transform: translateY(50%); /* Start sections halfway down */
        }

        section.active {
            transform: translateY(0); /* Move sections to normal position when active */
        }

        .skewed-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 10vh; /* Adjust height as needed */
            background: linear-gradient(135deg, #e0f2fe, #d1d5db); /* Example gradient */
            transform: skewY(-5deg); /* Skew the divider */
            transform-origin: bottom left;
            z-index: -1;
        }

        .animate-fade {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .hero-bg {
            background: linear-gradient(135deg, #60a5fa, #3b82f6);
            color: white;
            position: relative;
        }

        .scroll-down-arrow {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }

        .feature-item {
            @apply flex items-center mb-4;
        }

        .feature-icon {
            @apply mr-4 text-blue-500 text-2xl;
        }

        .demo-video {
            @apply rounded-lg shadow-lg;
        }

        .cta-section {
            @apply bg-gray-100 py-16;
        }

        .cta-form {
            @apply max-w-md mx-auto;
        }

        .about-section {
            @apply bg-blue-50 py-16;
        }

        .footer-section {
            @apply bg-gray-800 text-white py-8 text-center;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 15px;
            background-color: #3b82f6;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            display: none; /* Hidden by default */
        }
    </style>
</head>
<body class="font-sans">

    <section class="hero-bg text-center animate-fade">
        <div class="container mx-auto px-4">
            <h2 class="text-5xl font-bold mb-4">Supercharge Your Workflow: AI-Powered Automation Guidance.</h2>
            <p class="text-xl mb-8">Discover the perfect tools and automation strategies with our intelligent AI assistant.</p>
            <img src="your-hero-image.png" alt="AI Automation Guidance" class="mx-auto rounded-lg shadow-md max-w-lg">
        </div>
        <div class="scroll-down-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    <section class="bg-white py-16 px-4 animate-fade">
        <div class="skewed-divider"></div>
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-8">The Automation Challenge</h3>
            <p class="text-gray-700 leading-relaxed">Navigating automation can be complex. Choosing the right tools and optimizing workflows is time-consuming. We aim to solve this.</p>
        </div>
    </section>

    <section class="bg-gray-50 py-16 px-4 animate-fade">
        <div class="skewed-divider"></div>
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-8">Our AI-Powered Guidance</h3>
            <p class="text-gray-700 leading-relaxed">Our AI assistant provides personalized recommendations and answers automation questions, leveraging NVIDIA Riva for real-time assistance.</p>
        </div>
    </section>

    <section class="bg-white py-16 px-4 animate-fade">
        <div class="skewed-divider"></div>
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-8">Key Features</h3>
            <ul class="list-none text-gray-700 leading-relaxed">
                <li class="feature-item"><span class="feature-icon">💡</span> Intelligent Tool Recommendations</li>
                <li class="feature-item"><span class="feature-icon">⚙️</span> Workflow Optimization Guidance</li>
                <li class="feature-item"><span class="feature-icon">❓</span> Real-Time Question Answering</li>
                <li class="feature-item"><span class="feature-icon">🚀</span> Proactive Automation Suggestions</li>
                <li class="feature-item"><span class="feature-icon">🤖</span> NVIDIA Riva Integration</li>
            </ul>
        </div>
    </section>

    <section class="bg-gray-50 py-16 px-4 animate-fade">
        <div class="skewed-divider"></div>
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-8">Frontend Demo</h3>
            <div class="demo-video">
                <iframe width="560" height="315" src="your-demo-video-link" title="AI Automation Demo" frameborder="0" allowfullscreen></iframe>
            </div>
            <p class="text-center mt-4">See how our AI assistant transforms your automation experience.</p>
        </div>
    </section>

    <section class="cta-section animate-fade">
        <div class="skewed-divider"></div>
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-8 text-center">Request Full Script/API Access</h3>
            <p class="text-center text-gray-700 leading-relaxed mb-8">Unlock AI-driven automation guidance. Fill out the form below.</p>
            <form class="cta-form">
                <input type="text" placeholder="Name" class="w-full p-3 mb-4 border rounded">
                <input type="email" placeholder="Email" class="w-full p-3 mb-4 border rounded">
                <input type="text" placeholder="Company" class="w-full p-3 mb-4 border rounded">
                <label class="block mb-4"><input type="checkbox" class="mr-2"> Request API Access</label>
                <button class="bg-blue-600 text-white p-3 rounded w-full">Get Started</button>
            </form>
        </div>
    </section>

    <section class="about-section animate-fade">
        <div class="skewed-divider"></div>
        <div class="container mx-auto">
            <h3 class="text-3xl font-semibold mb-8 text-center">About Merit Code Technology</h3>
            <p class="text-center text-gray-700 leading-relaxed">Merit Code Technology empowers businesses with cutting-edge AI solutions.</p>
        </div>
    </section>

    <footer class="footer-section animate-fade">
        <p>&copy; <?php echo e(date('Y')); ?> Merit Code Technology. All rights reserved.</p>
    </footer>

    <button class="scroll-to-top" id="scrollToTopBtn">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <script>
        const sections = document.querySelectorAll('section');
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        function checkScroll() {
            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });

            if (window.scrollY > 300) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        }

        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Initial check

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>

</body>
</html><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/solution.blade.php ENDPATH**/ ?>