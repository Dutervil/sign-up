const allSlides = document.querySelectorAll('.slide');
const allSteps = document.querySelectorAll('.step')

//----------Next--------------
const next0 = allSlides[0].querySelector(".next");
const next1 = allSlides[1].querySelector(".next");
const next2 = allSlides[2].querySelector(".next");

next0.addEventListener("click", () => {
  allSlides[0].style.marginLeft = "-25%";
  allSteps[0].classList.add("passed");
});

next1.addEventListener("click", () => {
  allSlides[0].style.marginLeft = "-50%";
  allSteps[1].classList.add("passed");
});

next2.addEventListener("click", () => {
  allSlides[0].style.marginLeft = "-75%";
  allSteps[2].classList.add("passed");
});

//----------prev--------------
const prev1 = allSlides[1].querySelector(".prev");
const prev2 = allSlides[2].querySelector(".prev");
const prev3 = allSlides[3].querySelector(".prev");

prev1.addEventListener("click", () => {
  allSlides[0].style.marginLeft = "0%";
  allSteps[0].classList.remove("passed");
});

prev2.addEventListener("click", () => {
  allSlides[0].style.marginLeft = "-25%";
  allSteps[1].classList.remove("passed");
});

prev3.addEventListener("click", () => {
  allSlides[0].style.marginLeft = "-50%";
  allSteps[2].classList.remove("passed");
});

//-------------Submit-------------
const submit = document.querySelector(".submit")
submit.addEventListener("click", (event) => {
  allSteps[3].classList.add("passed");
  event.preventDefault();
  // Collect form data
  const formData = {
    firstname: document.querySelector('[name="firstname"]').value,
    lastname: document.querySelector('[name="lastname"]').value,
    othernames: document.querySelector('[name="othernames"]').value,
    email: document.querySelector('[name="email"]').value,
    number: document.querySelector('[name="number"]').value,
    address: document.querySelector('[name="address"]').value,
    birthdate: document.querySelector('[name="birthdate"]').value,
    gender: document.querySelector('[name="gender"]').value,
    country: document.querySelector('[name="country"]').value,
    username: document.querySelector('[name="username"]').value,
    password: document.querySelector('[name="password"]').value,
    cpassword: document.querySelector('[name="cpassword"]').value,
  };

  // Log the form data to the console
  console.log(formData);

  // Sending the data to save.php as JSON
  fetch('save.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(formData)
  })
    .then(response => response.json())
    .then(data => {
      console.log('Response:', data);
      if (data.success) {
        Swal.fire({
          title: 'Success!',
          text: 'You have successfully signed up!',
          icon: 'success',
          confirmButtonText: 'OK'
        }).then(() => {
          // Clear the form fields after success
          document.querySelector('form').reset();
        });
      } else {
        Swal.fire({
          title: 'Error!',
          text: data.message,
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }
    })
    .catch(error => {
      console.error('Error:', error.message);
      Swal.fire({
        title: 'Error!',
        text: error.message,
        icon: 'error',
        confirmButtonText: 'OK'
      });
    });


});

