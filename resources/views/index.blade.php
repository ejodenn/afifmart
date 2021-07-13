@extends ('layout/template')
@section ('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>A mart katalog</h1>
                <h2>We are the biggest supplier in the world and number one</h2>
            </div>
        </div>
        <div class="text-center">
         <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>

        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="icon"><i class="bi bi-calendar-date"></i></div>
                <h4 class="title"><a href="">Barang terbaru</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
            <div class="icon"><i class="bi bi-cash-stack"></i></div>
            <h4 class="title"><a href="">Harga bersaing</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
            <div class="icon"><i class="bi bi-cart-check"></i></div>
            <h4 class="title"><a href="">Transaksi mudah</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box">
            <div class="icon"><i class="bi bi-bag-check"></i></div>
            <h4 class="title"><a href="">Barang teruji</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
        </div>

        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>About Us</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
    </div>

    <div class="row content">
        <div class="col-lg-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        </p>
        <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
        </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="#" class="btn-learn-more">Learn More</a>
        </div>
    </div>

    </div>
</section><!-- End About Section -->

 <!-- ======= Clients Section ======= -->
 <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{asset('OnePage')}}/assets/img/clients/yakul.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{asset('OnePage')}}/assets/img/clients/aice.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{asset('OnePage')}}/assets/img/clients/wales.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{asset('OnePage')}}/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{asset('OnePage')}}/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="{{asset('OnePage')}}/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

    </div>
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Sevices</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
            <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
            </svg>
            <i class="bi bi-clock-fill"></i>
            </div>
            <h4><a href="">12+ hours opened</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-orange ">
            <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
            </svg>
            <i class="bx bx-file"></i>
            </div>
            <h4><a href="">See details pricing</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-pink">
            <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
            </svg>
            <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="">computer cashier</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
        </div>
    </div>

    </div>
</section><!-- End Sevices Section -->

<section id="katalog" class="katalog">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Katalog</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($barang as $data): ?>
            <div class="col">
                <div class="card">
                <img src="{{asset ('gambar')}}/{{$data -> gambar}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$data -> nama}}</h5>
                    <p class="card-text">{{$data -> deskripsi}}</p>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="upload" class="upload">
    
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>tambahkan barang</h2>
    </div>

    <form action="/insert" method="POST" enctype="multipart/form-data">
    @csrf   
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label" >Nama barang</label>
            <input name="nama" type="text" class="form-control"  aria-describedby="emailHelp">
            @error('nama')
                {{$massage}}
            @enderror
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1" class="text-area" >Harga</label>
            <input name="harga" type="text" class="form-control" >
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1" class="text-area" >Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" >
        </div>
        <label for="exampleInputPassword1" class="text-area" >Kategori</label></br>
        <select class="form-select mb-2" name="kategori">
            <option value="1">bahan pokok</option>
            <option value="2">makanan ringan</option>
            <option value="3">makanan berat</option>
            <option value="4">minuman</option>
            <option value="5">alat kebersihan</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="text-area" >Gambar</label>
            <input name="gambar" type="file" class="form-control" id="exampleInputPassword1">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row"><br>
        <div class="col-sm-5">
            <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.093067745766!2d113.25881271425438!3d-8.091991294174218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd65df1bf1e84bb%3A0xb4ae9b45052df660!2sAFIF%20MART!5e0!3m2!1sen!2sid!4v1626140535108!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="col-sm-7">
            <div class="row">

                <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>Jl. Raya Wonorejo, Gladak Serang, Banyuputih Lor, Kec. Randuagung</p>
                    </div>

                    <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>bebetsultan@gmail.com</p>
                    </div>

                    <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+62 823-3639-3323</p>
                    </div>

                </div>

                </div>

                <div class="col-lg-8">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

                </div>

            </div>
        </div>
    </div>

    </div>
</section><!-- End Contact Section -->

@endsection 