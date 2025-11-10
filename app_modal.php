<!-- Button trigger modal -->

<div class="modal fade" id="sendEnquiry" tabindex="-1" aria-labelledby="sendEnquiryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered enquiry-dialog">
    <div class="modal-content enquiry-card">
      <div class="modal-header border-0 pb-0">
        <div class="modal-title h5 fw-semibold" id="sendEnquiryLabel">Quick Enquiry</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body pt-3">
        <form id="enquiryForm">
          <!-- Full Name -->
          <div class="mb-3">
            <input type="text" class="form-control form-control-lg enquiry-input" placeholder="Full Name" name="full_name" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <input type="email" class="form-control form-control-lg enquiry-input" placeholder="Email id" name="email" required>
          </div>

          <!-- Phone (intl-tel-input compatible) -->
          <div class="mb-3">
            <input type="tel" class="form-control form-control-lg enquiry-input telePhone" placeholder="Mobile Number" name="phone" required>
            <!-- Keep any hidden inputs you use for country code -->
            <input type="hidden" name="dial_code" id="code">
            <input type="hidden" name="countryName" id="countryName">
          </div>

          <!-- Location -->
          <div class="mb-3">
            <input type="text" class="form-control form-control-lg enquiry-input" placeholder="Your Location" name="location">
          </div>

          <!-- Message -->
          <div class="mb-3">
            <textarea class="form-control enquiry-input" rows="4" placeholder="Your Message" name="message"></textarea>
          </div>

          <!-- reCAPTCHA (replace YOUR_SITE_KEY) -->
          <div class="mb-3">
            <!-- If you already load Google's script, this will render the real widget -->
            <div class="form-group mb-0">
              <div class="g-recaptcha" data-sitekey="Your_site_key"></div>
            </div>

          </div>

          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" class="main-btn">
              <span class="me-2 align-middle">
                <!-- Envelope icon (Bootstrap Icons SVG inline, no extra lib needed) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
              </span>
              Submit
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- WhatsApp Popup -->
<div class="modal fade" id="sendWhatsapp" tabindex="-1" aria-labelledby="sendWhatsappLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered enquiry-dialog whatsapp-dialog">
    <div class="modal-content enquiry-card">
      <div class="modal-header border-0 pb-0">
        <div class="modal-title h5 fw-semibold" id="sendWhatsappLabel">Message on WhatsApp</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body pt-3">
        <form id="whatsappForm">
          <!-- Full Name -->
          <div class="mb-3">
            <input type="text" class="form-control form-control-lg enquiry-input" placeholder="Full Name" name="full_name" required>
          </div>

          <!-- Phone (intl-tel-input compatible) -->
          <div class="mb-3 teleheight">
            <input type="tel" class="phone99  form-control form-control-lg enquiry-input telePhone" placeholder="Mobile Number" name="phone" required>
            <!-- keep your hidden fields for dial code/country if you already use them -->
            <input type="hidden" name="dial_code" id="code">
            <input type="hidden" name="countryName" id="countryName">
          </div>

          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" class="main-btn">
              <span class="me-2 align-middle">
                <!-- Envelope icon (Bootstrap Icons SVG inline, no extra lib needed) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
              </span>
              Submit
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<!-- request call abck modal Popup -->


<div class="modal fade" id="sendreqcall" tabindex="-1" aria-labelledby="sendreqcallLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered enquiry-dialog whatsapp-dialog">
    <div class="modal-content enquiry-card">
      <div class="modal-header border-0 pb-0">
        <div class="modal-title h5 fw-semibold" id="sendWhatsappLabel">Request CallBack</div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body pt-3">
        <form id="whatsappForm">

          <!-- Product Image & Name -->
          <div class="text-center mb-3">
            <div class=" popupheading" id="productName">Product Name Here</div>
            <img src="https://media.istockphoto.com/id/1401285340/photo/a-set-of-abrasive-grinding-wheels-for-construction-work.jpg?s=612x612&w=0&k=20&c=eU8ZWsReQLI74JN-TkzB1KeEOZN0-9qScpoqWIBVHsg=" alt="Product Image" class="img-fluid rounded product-img mb-2">

          </div>

          <!-- Phone (intl-tel-input compatible) -->
          <div class="mb-3 teleheight">
            <input type="tel" class="phone99 form-control form-control-lg enquiry-input telePhone" placeholder="Mobile Number" name="phone" required>
            <input type="hidden" name="dial_code" id="code">
            <input type="hidden" name="countryName" id="countryName">
          </div>

          <!-- Submit -->
          <div class="d-grid">
            <button type="submit" class="main-btn">
              <span class="me-2 align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
              </span>
              Submit
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>