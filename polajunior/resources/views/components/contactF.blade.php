  <div class="col-lg-6 col-md-6">
      <div class="contact-contentv2">
          <div class="write-comment">
              <h4 class="black fw-semibold mb-24">
                  Send a message
              </h4>
              <form method="POST" action="{{ route('contact') }}" class="row g-lg-4 g-3">
                  @csrf
                  <div class="col-lg-6">
                      <div class="comment-grp">
                          <input type="text" class="form-control" name="name" required placeholder="Your Name">
                          <i class="fa-brands fa-telegram"></i>

                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="comment-grp">
                          <input type="text" name="phone" required placeholder="Your Name">
                          <i class="fa-solid fa-phone"></i>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="comment-grp">
                          <input type="text" name="address" required placeholder="Your Address">
                          <i class="fa-solid fa-location-dot"></i>
                      </div>
                  </div>
                  <div class="col-lg-12 mb-xl-3">
                      <div class="comment-grp text-aras position-relative">
                          <textarea name="message" rows="5" required placeholder="Write Your Message Here"></textarea>
                          <span class="enves">
                              <i class="fa-solid fa-envelope"></i>
                          </span>
                      </div>
                  </div>
                  <div class="comment-btn">
                      <button type="submit" class="theme-btn w-100 round100 p2-bg py-3 px-xl-5 px-4">
                          <span class="white fw-medium">
                              Send Now
                          </span>
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
