<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="assets/css/st.css">
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
</head>

<body>

    <section id="header">
        <a href="#"><img src="{{ asset('image/logo.png') }}" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="/login">Sign In</a></li>
                <li><a href="/register">Sign Up</a></li>
            </ul>
        </div>
    </section>

    <section id="hero">
        <h4>Penawaran Tukar Tambah</h4>
        <h2>Penawaran Tinggi</h2>
        <h1>Di Semua Produk</h1>
        <p>Lebih Hemat Dengan Potongan Dan Diskon Hingga 80% !!</p>
        {{-- <button>Belanja Sekarang</button> --}}
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="{{ asset('image/features/f1.png') }}" alt="">
            <h6>Pemesanan Online</h6>
        </div>
        <div class="fe-box">
            <img src="{{ asset('image/features/f2.png') }}" alt="">
            <h6>Hemat Waktu</h6>
        </div>
        <div class="fe-box">
            <img src="{{ asset('image/features/f3.png') }}" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="{{ asset('image/features/f4.png') }}" alt="">
            <h6>Promo</h6>
        </div>
        <div class="fe-box">
            <img src="{{ asset('image/features/f5.png') }}" alt="">
            <h6>Happy Sell</h6>
        </div>
    </section>

    <section id="produk1" class="section-p1">
        <h2>Fitur Produk</h2>
        <p>Koleksi Musim Panas Dengan Desain Baru</p>
        <div class="pro-container">
            <div class="pro">
                <img class="kaos" src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
        </div>
    </section>

    {{-- <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% off</span> All t-Shirt & Accessories</h2>
        <button class="normal">Explore More</button>

    </section> --}}

    <section id="produk1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Koleksi Musim Panas Dengan Desain Baru</p>
        <div class="pro-container">
            <div class="pro">
                <img class="kaos" src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
            <div class="pro">
                <img class="kaos" src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                        <img src="img/star.png" class="bintang" height="15px" width="15px" alt="">
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><img src="img/cart.png" height="15px" width="15px"
                        style="position: absolute;bottom: 20px;right: 10px;" alt=""></a>
            </div>
        </div>
    </section>

    {{-- <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The </span>
            <button class="white">Learn More </button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The </span>
            <button class="white">Collection</button>
        </div>
    </section> --}}

    {{-- <section id="banner3">
        <div class="banner-box ">
            <h2>SEASON SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spiring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3 ">
            <h2>T-shirt</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section> --}}

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span> special offers.</span></p>

        </div>
        <div class="form">
            <input type="text" placeholder="Your Email Adress">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            {{-- <img class="logo" src="{{asset('image/logo.png')}}" alt=""> --}}
            <h4>Contact</h4>
            <p> <strong>Adress :</strong> 562 Wellington Road, Street 32,San Francisco</p>
            <p> <strong>Phone :</strong> +01 2222 365 /(+91)012345678</p>
            <p> <strong>Hours :</strong>10.00-18.00.Mon-Sat</p>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contac US</a>
        </div>

        <div class="copyright">
            <p>Copyright 2021, Tech2 etc - Bintang pranata</p>
        </div>
    </footer><!-- ====== Team Section Start -->
    <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Our Team Members
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Our Creative Team
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    @foreach ($user as $item)
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="{{ asset("image/user/$item->foto") }}" alt="team image"
                                class="h-[120px] w-[120px] rounded-full" />
                            {{-- height="120px" width="120px"/> --}}
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span
                                class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                        fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                {{ $item->nama }}
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                {{ $item->level }}
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Team Section End -->

    <!-- ====== All Scripts -->

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });
        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

        // Testimonial
        const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: 1,
            spaceBetween: 30,

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</body>

</html>




<!-- ====== Footer Section End -->
