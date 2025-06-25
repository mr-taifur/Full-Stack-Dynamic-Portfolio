<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    <style>
        html {
  scroll-behavior: smooth;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f4f4f4;
  color: #222;
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  padding: 20px 40px;
  background-color: #1e1e1e;
  color: white;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  position: sticky;
  top: 0;
  z-index: 100;
}

.logo-section {
  display: flex;
  align-items: center;
}

.logo {
  height: 50px;
  margin-right: 12px;
  border-radius: 50%;
}

.name {
  font-size: 1.4rem;
  font-weight: 600;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 25px;
  flex-wrap: wrap;
  justify-content: center;
}

.nav-links a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-links a:hover {
  color: #00bcd4;
}

/* Hero Section */
.hero {
  display: flex;
  flex-direction: row;
  height: calc(100vh - 80px);
  width: 100%;
}

.hero-text,
.hero-img {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 60px;
  min-height: 100%;
}

.hero-text {
  background-color: black;
  color: white;
}

.hero-text h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.hero-text p {
  font-size: 1.3rem;
  line-height: 1.6;
}

.hero-img {
  background-color: #eee;
  align-items: center;
}

.hero-img img {
  max-width: 78%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
}

/* About Section */
.about {
  padding: 60px 30px;
  background-color: #fdfdfd;
}

.about h2 {
  text-align: center;
  margin-bottom: 20px;
}

.about-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 40px;
  max-width: 1200px;
  margin: 0 auto;
  flex-wrap: wrap;
}

.about-image-wrapper {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  min-width: 240px;
  background-color: rgb(239, 234, 234);
  padding: 4px;
  border-radius: 8px;
}

.about-image-wrapper img {
  width: auto;
  max-width: 300px;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.about-text-wrapper {
  flex: 1.2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  min-width: 280px;
  padding: 20px;
}

.about-text-wrapper h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #111;
}
.about-description-box {
  background-color: #f3f3f3;
  border-left: 5px solid #00bcd4;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  font-size: 1rem;
  line-height: 1.6;
  width: 100%;
  max-width: 450px;
  align-self: flex-start;
}
.about-description-box:hover {
  background-color: #e0f7fa; 
  border-left-color: #007c91;
  box-shadow: 0 4px 15px rgba(0, 188, 212, 0.4);
  cursor: pointer; 
  transition: all 0.3s ease;
}

@media (max-width: 1024px) {
  .hero-text,
  .hero-img {
    padding: 40px;
  }

  .hero-text h1 {
    font-size: 2.5rem;
  }

  .hero-text p {
    font-size: 1.1rem;
  }
}

@media (max-width: 768px) {
  .hero {
    flex-direction: column-reverse;
    height: auto;
  }

  .hero-text,
  .hero-img {
    width: 100%;
    min-height: auto;
    padding: 30px;
  }

  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .nav-links {
    width: 100%;
    justify-content: flex-start;
    gap: 15px;
    margin-top: 10px;
    flex-wrap: wrap;
  }

  .logo {
    height: 40px;
  }

  .name {
    font-size: 1.2rem;
  }

  .footer {
    padding: 20px 10px;
  }

  .footer-links {
    flex-direction: column;
    gap: 10px;
  }

  .about-container {
    flex-direction: column;
    text-align: center;
  }

  .about-text-wrapper {
    align-items: center;
    padding: 15px;
  }

  .about-text-wrapper h2 {
    font-size: 1.6rem;
  }

  .about-description-box {
    font-size: 0.95rem;
    padding: 15px;
    align-self: center;
  }
}
/* Research Section */
.research {
  padding: 60px 30px;
  background-color: #caecf1;
  text-align: center;
  max-width: 1200px;
  margin: 0 auto 60px auto;
}

.section-title {
  font-size: 2.5rem;
  margin-bottom: 40px;
  color: #222;
  font-weight: 600;
}

.research-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
}

.research-item {
  position: relative;
  width: 250px;      
  height: 320px;  
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
  cursor: pointer;
  background-color: #f9f9f9;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.research-item img {
  width: 100%;
  height: 220px; 
  object-fit: cover;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  transition: transform 0.3s ease;
  display: block;
}

.research-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 35px rgba(0, 188, 212, 0.4);
}

.research-item:hover img {
  transform: scale(1.05);
}

.overlay {
  position: absolute;
  bottom: 0;
  background: rgba(0, 188, 212, 0.85);
  color: white;
  width: 100%;
  padding: 14px;
  font-weight: 600;
  opacity: 0;
  transition: opacity 0.3s ease;
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
  text-align: center;
  font-size: 1.1rem;
}

.research-item:hover .overlay {
  opacity: 1;
}

@media (max-width: 1024px) {
  .research-item {
    width: 45%;
    height: auto;
  }

  .research-item img {
    height: 200px;
  }
}

@media (max-width: 600px) {
  .research-container {
    gap: 25px;
  }

  .research-item {
    width: 90%;
    height: auto;
  }

  .research-item img {
    height: 180px;
  }
}

/* contact */
.contact {
  padding: 60px 20px;
  background-color: #caecf1;
  text-align: center;
}

.contact-hover-box {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 20px 40px;
  background-color: #fff;
  border-left: 5px solid #00bcd4;
  border-radius: 10px;
  margin: 20px auto;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  max-width: 700px;
  height: 100px;
  text-align: left;
  gap: 30px;
}

.contact-hover-box:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0, 188, 212, 0.2);
  width: 700px;      
  max-width: 80%;  
  padding: 20px 40px;
}
.contact-hover-box p {
  margin: 0;
  font-size: 1rem;
  color: #333;
  white-space: nowrap;
}
@media (max-width: 768px) {
  .contact-hover-box {
    flex-direction: column;
    height: auto;
    gap: 10px;
    text-align: center;
    padding: 20px;
  }
}

/* blog */

.blog-section {
  padding: 60px 30px;
  background-color: #caecf1;
  max-width: 1200px;
  margin: 0 auto 60px auto;
  text-align: center;
}

.blog-section h2 {
  font-size: 2.5rem;
  margin-bottom: 40px;
  color: #111;
}

.blog-container {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

.blog-post {
  background-color: white;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  width: 300px;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
  text-align: left;
}

.blog-post img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
}

.blog-post h3 {
  margin: 15px 20px 10px 20px;
  font-size: 1.3rem;
  color: #222;
}

.blog-post p {
  margin: 0 20px 20px 20px;
  font-size: 1rem;
  color: #555;
  line-height: 1.4;
}

.blog-post:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 30px rgba(0, 188, 212, 0.3);
}

@media (max-width: 992px) {
  .blog-post {
    width: 45%;
  }
}

@media (max-width: 600px) {
  .blog-post {
    width: 90%;
  }

  .blog-section h2 {
    font-size: 2rem;
    margin-bottom: 30px;
  }
}

/* Contact Section */
.contact {
  background-color: #fff;
  padding: 60px 20px;
}

.contact-container {
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
  padding: 40px 30px;
  background-color: #caecf1;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 188, 212, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 188, 212, 0.2);
}

.contact-container h2 {
  font-size: 2.2rem;
  margin-bottom: 30px;
  color: #222;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.form-group {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
  justify-content: space-between;
}

.form-group input {
  flex: 1;
  min-width: 150px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 12px;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
  transition: border-color 0.3s, box-shadow 0.3s;
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #00bcd4;
  box-shadow: 0 0 5px rgba(0, 188, 212, 0.3);
}

.contact-form input:hover,
.contact-form textarea:hover {
  background-color: #e0f7fa; /* Light cyan shade */
  transition: background-color 0.3s ease;
}

.contact-form textarea:focus {
  border-color: #00bcd4;
  box-shadow: 0 0 5px rgba(0, 188, 212, 0.3);
}

.contact-form textarea {
  resize: vertical;
  min-height: 120px;
}

.contact-form button {
  background-color: #00bcd4;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
}

.contact-form button:hover {
  background-color: #0097a7;
}

.form-status {
  margin-top: 10px;
  color: green;
  font-weight: bold;
  font-size: 0.95rem;
}

@media (max-width: 768px) {
  .contact-container {
    padding: 30px 20px;
  }

  .form-group {
    flex-direction: column;
    gap: 12px;
  }

  .contact-container h2 {
    font-size: 1.8rem;
  }
}


/* Footer */
.footer {
  background-color: #1e1e1e;
  color: white;
  padding: 30px 20px;
  text-align: center;
  margin-top: auto;
}

.footer-content {
  max-width: 1000px;
  margin: 0 auto;
}

.footer-links {
  margin-top: 10px;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}

.footer-links a {
  color: #ccc;
  text-decoration: none;
  font-size: 0.95rem;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #00bcd4;
}

.footer-signature {
  width: 150px;
  height: auto;
  margin-bottom: 10px;
  opacity: 0.8;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.footer-signature:hover {
  transform: scale(1.05);
  opacity: 1;
}

@media (max-width: 600px) {
  .footer-signature {
    width: 120px;
  }
}


</style>

</head>
<body>
      @yield('main-content');
      <script src="{{ asset('js/contact.js') }}"></script>
</body>
</html>