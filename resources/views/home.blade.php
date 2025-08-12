
<section id="about" class="about">
  <div class="about-container">
    
    <div class="about-image-wrapper">
      <img src="{{ asset('assets/images/t.jpg') }}" alt="Taifur Rahman">
    </div>

    <div class="about-text-wrapper">
      <h2 class="about">About Myself</h2>
      <div class="about-description-box">
        <p>
          I'm Taifur Rahman, a passionate learner focused on AI, web development, and deep research. I love building modern solutions and exploring the intersection between design, data, and technology.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Research Section -->
<section id="research" class="research">
  <h2 class="section-title">My Research</h2>
  <div class="research-container">

    <div class="research-item">
      <img src="https://cdn.prod.website-files.com/6077b42e4e8d6b13a8ea682a/640eb1bd2e494865ac01beb0_AI%20in%20Ag.jpg" alt="Research 1">
      <div class="overlay">AI in Agriculture</div>
    </div>

    <div class="research-item">
      <img src="https://play-lh.googleusercontent.com/FvsmsXjwxPTe0e5Z4zh8WVb-RT_ZC5hFooEyLApIipWUtmGfktrJzl1p5RJa0-A7WOo1" alt="Research 2">
      <div class="overlay">Medicinal Plant Identification</div>
    </div>

    <div class="research-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb7fADS2dFdxwuAwldhDV0yeP2QkSINSKrIw&s" alt="Research 3">
      <div class="overlay">Bangladesh Traffic System AI</div>
    </div>

  </div>
</section>
<!-- blog -->
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
    <h2>Contact Me</h2>
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
</body>
</html> --}}
