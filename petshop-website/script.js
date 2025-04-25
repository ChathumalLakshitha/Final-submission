// Select the carousel element by its ID
const carousel = document.getElementById('carousel');

// Use Bootstrap's carousel method to enable auto-sliding
if (carousel) {
  const bsCarousel = new bootstrap.Carousel(carousel, {
    interval: 3000, // Time between slides in milliseconds (3 seconds)
    ride: 'carousel', // Automatically start sliding
  });
}


function contactUs() {
  let name = document.getElementById("name");
  let email = document.getElementById("email");
  let message = document.getElementById("message");

  if (name.value == "" || email.value == "" || message.value == "") {
    alert("Please Fill All Fields");
  } else {
    let form = new FormData();

    form.append("name", name.value);
    form.append("email", email.value);
    form.append("message", message.value);

    let req = new XMLHttpRequest();

    req.onreadystatechange = function () {
      if (req.readyState == 4) {
        let t = req.responseText;
        alert(t);
        email.value = "";
        name.value = "";
        message.value = "";

      }
    }

    req.open("POST", "contactFromProcess.php", true);
    req.send(form);
  }
}
