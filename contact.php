<?php $contact = true;
require_once 'includes/header.php'; ?>
<section class="contact">
    <article class="container">
        <h4 class="sub-title">GET IN TOUCH WITH US</h4>
        <h1 class="title">Contact Information</h1>
        <img src="imgs/map.png" alt="map" class="img-contact">
        <section class="modal-dialog modal-contact">
            <article class="modal">
                <a href="#" id="close" class="close-contact">X</a>
                <p>Thank you <span></span>!</p>
                <p>We have received your message and one of our team will contact you as soon as possible.</p>
            </article>
        </section>
        <section class="row contact-information">
            <article class="p1-6">
                <h1 class="title-contact">Contact Form</h1>
                <form method="POST" id="form-contact">
                    <section class="form-group">
                        <input type="text" name="name" placeholder="Name" id="name" class="input-control" required>
                    </section>
                    <section class="form-group">
                        <input type="email" name="email" placeholder="Email" id="email" class="input-control" required>
                    </section>
                    <section class="form-group">
                        <input type="text" name="subject" placeholder="Subject" id="subject" class="input-control" required>
                    </section>
                    <section class="form-group">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message" class="input-control" required></textarea>
                    </section>
                    <section class="form-group center">
                        <button class="btn-green">SEND A MESSAGE</button>
                    </section>
                </form>
            </article>


            <article class="p1-4 contact-info">
                <h1 class="title-contact">Information</h1>
                <p class="contact-t-info">Address</p>
                <p>136 Hamdam Stree, Abu Dhabi city</p>
                <p class="contact-t-info">Phone</p>
                <p>+971 (0) 2 11 11 111</p>
                <p class="contact-t-info">Email</p>
                <p>info@abudhabiterhal.ae</p>
            </article>
        </section>
    </article>
</section>

<?php require_once 'includes/footer.php' ?>
