<!-- star main -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>GALERI FOTO</h2>
            <!-- <p>Selamat datang di [Nama Perusahaan], tempat di mana inovasi bertemu dengan komitmen untuk menyediakan solusi terbaik bagi Anda. -->
            <!-- Kami berdedikasi untuk membantu Anda mencapai tujuan melalui produk dan layanan berkualitas tinggi, dengan pendekatan yang didorong oleh integritas dan keahlian.</p> -->
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <!-- custombred -->
    <div class="container mt-5">
        <nav aria-label="breadcrumb bg-black">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Home">Home</a></li>
                <li class="breadcrumb-item"><a href="Informasi">Informasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
            </ol>
    </div>
    <!-- end custombred -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <main>
                <div class="container my-4 ">
                    <div class="row g-3">
                        <!-- Galeri 9 gambar -->
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/8.jpg " class="img-fluid shadow-lg " alt="Gambar 1" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/1.jpg" class="img-fluid rounded shadow-lg" alt="Gambar 2" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/2.jpg " class="img-fluid rounded shadow-lg" alt="Gambar 3" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/3.jpg" class="img-fluid rounded shadow-sm" alt="Gambar 4" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/4.jpg" class="img-fluid rounded shadow-sm" alt="Gambar 5" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/5.jpg" class="img-fluid rounded shadow-sm" alt="Gambar 6" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/6.jpg" class="img-fluid rounded shadow-sm" alt="Gambar 7" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/7.jpg" class="img-fluid rounded shadow-sm" alt="Gambar 8" onclick="showImage(this)">
                        </div>
                        <div class="col-4">
                            <img src="<?= base_url(relativePath: 'front-end') ?>/assets/img/tobati/8.jpg" class="img-fluid rounded shadow-sm" alt="Gambar 9" onclick="showImage(this)">
                        </div>
                    </div>
                </div>

                <!-- Modal untuk memperbesar gambar -->
                <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img id="modalImage" src="" class="img-fluid" alt="Gambar diperbesar">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Students</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Courses</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Events</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Trainers</p>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>What are they saying</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen
                                    aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure
                                    amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                    sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                    quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                    esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

</main>
<!-- End #main -->

<script>
    function showImage(img) {
        const modalImage = document.getElementById('modalImage');
        modalImage.src = img.src;
        const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
        imageModal.show();
    }
</script>