@extends('index')

@push('style')
    <title>Taifur Rahman Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('main-content')
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo-section">
            <img src="{{ asset('assets/images/t.jpg') }}" alt="Logo" class="logo">
            <span class="name">Taifur Rahman</span>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#research">Research</a></li>
            <li><a href="#projects">MyProjects</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="https://www.linkedin.com/in/taifur-rahman-840b492b0/" target="_blank">LinkedIn</a></li>
            <li><a href="https://drive.google.com/file/d/1rgrdP_6bMuFMyQrRuugQ2wTGXIsKl5t0/view?usp=sharing" target="_blank">Resume</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-text">
            <h1>Welcome to My Portfolio</h1>
            <p>I'm <strong>Taifur Rahman</strong>, a passionate learner and researcher exploring tech, AI, and innovation.</p>
        </div>
        <div class="hero-img">
            <img src="{{ asset('assets/images/t.jpg') }}" alt="Taifur Rahman">
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="about">
        <div class="about-container">
            <div class="about-image-wrapper">
                <img src="{{ asset('assets/images/t.jpg') }}" alt="Taifur Rahman" />
            </div>

            <div class="about-info-wrapper">
                <div class="info-card about-me">
                    <h2>About Myself</h2>
                    <p>
                        I'm Taifur Rahman, a passionate learner focused on AI, web development, and deep research.
                        I love building modern solutions and exploring the intersection between design, data, and technology.
                    </p>
                </div>

                <div class="info-card academic-background">
                    <h2>Academic Background</h2>
                    <ul>
                        <li><strong>B.Sc. in CSE</strong> — Daffodil International University</li>
                        <li><strong>HSC</strong> — Milestone College</li>
                        <li><strong>SSC</strong> — BSNH School</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section id="research" class="project-section">
        <h2 class="section-title">My Research</h2>
        <div class="project-container">
            <div class="project-card">
                <img src="https://cdn.prod.website-files.com/6077b42e4e8d6b13a8ea682a/640eb1bd2e494865ac01beb0_AI%20in%20Ag.jpg" alt="Research 1">
                <h3>AI in Agriculture</h3>
                <p>Applied AI models to monitor crop health, optimize yield, and assist in precision farming techniques.</p>
            </div>

            <div class="project-card">
                <img src="https://play-lh.googleusercontent.com/FvsmsXjwxPTe0e5Z4zh8WVb-RT_ZC5hFooEyLApIipWUtmGfktrJzl1p5RJa0-A7WOo1" alt="Research 2">
                <h3>Medicinal Plant Identification</h3>
                <p>Deep learning models to classify and detect medicinal plant leaves.</p>
            </div>

            <div class="project-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb7fADS2dFdxwuAwldhDV0yeP2QkSINSKrIw&s" alt="Research 3">
                <h3>Bangladesh Traffic System AI</h3>
                <p>Smart AI solutions for predicting and managing traffic flow</p>
            </div>
        </div>
    </section>

    <!-- My Projects Section -->
    <section id="projects" class="project-section">
        <h2 class="section-title">My Projects</h2>
        <div class="project-container">
            <div class="project-card">
                <img src="https://static.vecteezy.com/system/resources/previews/022/223/650/non_2x/smart-ai-chat-bot-communicate-with-human-vector.jpg" alt="Project 1">
                <h3>AI Chatbot</h3>
                <p>Developed a smart chatbot using Python and OpenAI's API to assist users in real time.</p>
            </div>

            <div class="project-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThxKA7HvO10GTQBbTTroY57QxgaI-W6kfyUw&s" alt="Project 2">
                <h3>Weather App</h3>
                <p>A real-time weather forecasting web app using HTML, CSS, JS, and OpenWeather API.</p>
            </div>

            <div class="project-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH73xvHGihq0ZU_7-gCt6XgdAUlakKVu3pxA&s" alt="Project 3">
                <h3>Traditional Food Website</h3>
                <p>This Is Bangladeshi All Traditional Food Dynamic Website</p>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <h2>Latest Blog Posts</h2>
        <div class="blog-container">
            <div class="blog-post">
                <img src="https://cdn.prod.website-files.com/60ef088dd8fef99352abb434/64502c47934b682e375a0876_AnyConv.com__Artificial%20Intelligence%20Blog%20Writing%20Using%20AI%20in%2060%20Minutes.webp" alt="Blog Post 1" />
                <h3>Understanding AI Basics</h3>
                <p>A beginner-friendly guide to Artificial Intelligence fundamentals.</p>
            </div>

            <div class="blog-post">
                <img src="https://cdn.quokkalabs.com/blog/object/20231009104935_c14918e7b32d4f909ec92494e3651afa.webp" alt="Blog Post 2" />
                <h3>Web Development Trends 2025</h3>
                <p>Explore the future of web technologies and frameworks.</p>
            </div>

            <div class="blog-post">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20240523171004/Applications-of-Deep-Learning-in-Healthcare.webp" alt="Blog Post 3" />
                <h3>Deep Learning in Medical Imaging</h3>
                <p>How AI is transforming healthcare diagnostics.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="contact-container">
            <h2>Let's Connect for Collaboration</h2>
            <form id="contactForm" class="contact-form" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
                <p id="form-status" class="form-status"></p>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFJtGSYbETjjT-mckVeSMSQ6izsfNMQ6pE1w&s" alt="Signature" class="footer-signature" />

            <p>&copy; {{ date('Y') }} Taifur Rahman. All rights reserved.</p>

            <div class="footer-links">
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
                <a href="https://www.linkedin.com/in/taifur-rahman-840b492b0/" target="_blank">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
