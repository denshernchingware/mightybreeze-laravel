<div class="row justify-content-center">
    <div class="col-xxl-6 col-xl-7 col-lg-11">
        <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
            <div class="row justify-content-center"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Name*</label>
                    <div class="position-relative form-group mb-25px">
                        <span class="form-icon" style="color:#717580"><i class="bi bi-emoji-smile"></i></span>
                        <input
                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                            id="exampleInputEmail1" type="text" name="name" placeholder="Enter your full name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Email address*</label>
                    <div class="position-relative form-group mb-25px">
                        <span class="form-icon" style="color:#717580"><i class="bi bi-envelope"></i></span>
                        <input
                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                            id="exampleInputEmail2" type="email" name="email"
                            placeholder="Enter your email address" />
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Phone number</label>
                    <div class="position-relative form-group mb-25px">
                        <span class="form-icon" style="color:#717580"><i class="bi bi-telephone"></i></span>
                        <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control"
                            id="exampleInputEmail3" type="tel" name="phone"
                            placeholder="Enter your phone number" />
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Subject</label>
                    <div class="position-relative form-group mb-25px">
                        <span class="form-icon" style="color:#717580"><i class="bi bi-journals"></i></span>
                        <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control"
                            id="exampleInputEmail4" type="text" name="subject" placeholder="How can we help you?" />
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Your message</label>
                    <div class="position-relative form-group form-textarea mb-0">
                        <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="comment"
                            placeholder="Describe about your project" rows="4"></textarea>
                        <span class="form-icon"style="color:#717580"><i class="bi bi-chat-square-dots"></i></span>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-8">
                    <p class="mb-0 fs-14 lh-24 text-center text-md-start" style="color:#717580">We are committed to
                        protecting your privacy. We will never collect information about you without your explicit
                        consent.</p>
                </div>
                <div class="col-xxl-6 col-lg-5 col-md-4 text-center text-md-end sm-mt-25px   ">
                    <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                    <button
                        class="btn btn-medium btn-dark-gray btn-box-shadow btn-rounded text-transform-none primary-font submit"
                        type="submit">Send message</button>
                </div>
                <div class="col-12">
                    <div class="form-results mt-20px d-none"></div>
                </div>
            </div>
        </form>
    </div>
</div>
