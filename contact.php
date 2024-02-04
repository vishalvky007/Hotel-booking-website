<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paradise - CONTACT US</title>
  <?php require('include/links.php'); ?>
</head>

<body class="bg-light">

  <?php require('include/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Exercitationem laudantium <br> consequuntur culpa nobis id dolor,
      eius iure impedit consequatur aut.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60343.11301091681!2d77.20851048767955!3d28.660237124725395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1706626473002!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/N1tMtdahyVr2U4n6A" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> Paradise Hotel, Sector 13, Dwarka, New Delhi-110075
          </a>
          <h5 class="mt-4">Call us</h5>
          <a href="tel: +919876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill text-primary"></i> +919876543210
          </a>
          <br>
          <a href="tel: +919876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill text-success"></i> +91234567890
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto: .paradisehotel@gmail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> paradisehotel@gmail.com
          </a>

          <h5 class="mt-4">Follow us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter-x me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-whatsapp me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Mobile</label>
              <input type="number" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="9" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3 px-4">Send</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <?php require('include/footer.php'); ?>
</body>

</html>