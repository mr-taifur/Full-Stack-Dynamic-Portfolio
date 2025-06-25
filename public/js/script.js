document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  const status = document.getElementById("form-status");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");

    if (!name.value || !email.value || !subject.value || !message.value) {
      status.textContent = "Please fill in all fields.";
      status.style.color = "red";
      return;
    }

    status.textContent = "Message sent successfully!";
    status.style.color = "green";
    form.reset();
  });
});
