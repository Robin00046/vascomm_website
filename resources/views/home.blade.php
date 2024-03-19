<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Halaman Customer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Vasscomm<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{ asset('assets/') }}/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li> <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
        </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($products as $product)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ $product->gambar }}" style="width: 200px; height: 200px;" alt="">
                <h3>{{ $product->nama }}</h3>
                <h4>Rp. {{ number_format($product->harga) }}</h4>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
        </div>

        <div class="row">
          @foreach ($products as $product)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ $product->gambar }}" class="img-fluid" alt="" style="width: 200px; height: 200px;">
              </div>
              <div class="member-info">
                <h4>{{ $product->nama }}</h4>
                <span>Rp. {{ number_format($product->harga) }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><svg width="168" height="28" viewBox="0 0 168 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M25.7025 2.94649C25.8647 2.78772 26.1331 2.78772 26.2954 2.94649L32.3243 8.96087L33.8315 7.46038L26.6012 0.247486C26.2704 -0.0824954 25.7274 -0.0824954 25.3966 0.247486L18.1694 7.45727L19.6735 8.96087L25.7025 2.94649Z" fill="#2F318A"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2645 11.361L15.7604 9.86053L9.7377 15.8687C9.57231 16.0306 9.30394 16.0306 9.13543 15.8687L1.15305 7.90866L0.248084 8.80833C-0.0826948 9.14142 -0.0826948 9.67998 0.248084 10.01L8.82962 18.5708C9.1604 18.9008 9.70337 18.9008 10.0342 18.5708L17.2645 11.361Z" fill="#00A2E8"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M35.1858 8.81144L34.284 7.90866L18.0196 24.1307C17.8542 24.2957 17.5827 24.2957 17.4174 24.1307L11.3947 18.1225L9.88745 19.6261L17.1178 26.8359C17.4486 27.169 17.9915 27.169 18.3223 26.8359L35.1858 10.0131C35.5166 9.68309 35.5166 9.14142 35.1858 8.81144Z" fill="#00A2E8"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9.13538 2.95271C9.30077 2.78772 9.57225 2.78772 9.73764 2.95271L17.7169 10.9127L19.2241 9.41225L10.0372 0.247486C9.70644 -0.0824954 9.16346 -0.0824954 8.83268 0.247486L1.60547 7.45727L3.1127 8.95775L9.13538 2.95271Z" fill="#D04334"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6767 9.86053L18.1726 11.361L23.2934 16.4695C23.7085 16.8835 24.3856 16.8835 24.8007 16.4695C25.2157 16.0555 25.2157 15.3831 24.8007 14.969L19.6767 9.86053Z" fill="#D04334"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0203787 9.58657C0.0141376 9.50252 0.011017 9.42158 0.00789648 9.33752C0.00165536 9.42158 0.00477592 9.50563 0.0203787 9.58657Z" fill="url(#paint0_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0203787 9.58657C0.0141376 9.50252 0.011017 9.42158 0.00789648 9.33752C0.00165536 9.42158 0.00477592 9.50563 0.0203787 9.58657Z" fill="url(#paint1_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67475 14.9472H5.69035C6.43616 14.9472 7.14453 14.7978 7.79672 14.5332L1.15306 7.90866L0.251216 8.80833C0.10455 8.95775 0.0265358 9.14454 0.0078125 9.33754C0.0109331 9.4216 0.0140536 9.50253 0.0202947 9.58659C0.0515003 9.74224 0.126394 9.88855 0.248095 10.01L5.16922 14.9192C5.33773 14.9348 5.50312 14.9472 5.67475 14.9472Z" fill="url(#paint2_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.69028 3.42279H5.68716C5.67468 3.42279 5.66219 3.4259 5.64659 3.4259L1.60547 7.45728L3.10958 8.95776L8.10871 3.9738C7.37538 3.62514 6.55779 3.42279 5.69028 3.42279Z" fill="url(#paint3_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M29.8123 4.11697H29.7998C29.1071 4.11697 28.4424 4.25083 27.8276 4.47809L32.3212 8.96085L33.8285 7.46037L30.5332 4.1699C30.296 4.13877 30.0588 4.11697 29.8123 4.11697Z" fill="url(#paint4_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M35.426 9.33133C35.4291 9.36557 35.4291 9.39982 35.4291 9.43717C35.4323 9.40293 35.4291 9.36557 35.426 9.33133Z" fill="url(#paint5_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4291 9.43716C35.4291 9.40292 35.426 9.36556 35.426 9.33132C35.4073 9.14142 35.3293 8.95464 35.1857 8.81144L34.2839 7.90866L27.3594 14.8196C28.0989 15.1776 28.9259 15.3831 29.8028 15.3831L29.8059 15.3799L35.1889 10.0162C35.3449 9.85431 35.4229 9.64573 35.4291 9.43716Z" fill="url(#paint6_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7441 5.89764L25.7024 2.94649C25.8646 2.78772 26.133 2.78772 26.2953 2.94649L29.2505 5.89764C29.834 5.48361 30.3364 4.96684 30.7265 4.36603L26.6011 0.247486C26.2703 -0.0824954 25.7273 -0.0824954 25.3966 0.247486L21.2681 4.36603C21.6581 4.96684 22.1605 5.48361 22.7441 5.89764Z" fill="url(#paint7_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2243 9.41225L16.9962 7.18954C16.5469 7.76234 16.163 8.38806 15.8604 9.05736L17.7171 10.9096L19.2243 9.41225Z" fill="url(#paint8_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6767 9.86053L18.1726 11.361L23.2934 16.4695C23.7085 16.8835 24.3856 16.8835 24.8007 16.4695C25.2157 16.0555 25.2157 15.3831 24.8007 14.969L19.6767 9.86053Z" fill="url(#paint9_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6735 8.96088L21.7924 6.85024C21.3337 6.30546 20.8375 5.79804 20.3039 5.32797L18.1694 7.45729L19.6735 8.96088Z" fill="url(#paint10_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0196 24.1307C17.8542 24.2957 17.5827 24.2957 17.4174 24.1307L11.3947 18.1225L9.88745 19.6261L17.1178 26.8359C17.4486 27.169 17.9915 27.169 18.3223 26.8359L24.2514 20.9211C24.7007 19.7102 24.9847 18.4214 25.0877 17.0859L18.0196 24.1307Z" fill="url(#paint11_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8985 1.76041H10.8891H10.8673C9.41623 1.76041 8.0151 1.97832 6.6951 2.3799L1.60547 7.45726L3.1127 8.95774L9.13538 2.94958C9.30077 2.78459 9.57225 2.78459 9.73764 2.94958L17.7169 10.9096L19.2241 9.40913L11.5757 1.77908C11.351 1.76975 11.1232 1.76352 10.8985 1.76041Z" fill="url(#paint12_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7944 16.4695C25.2095 16.0555 25.2095 15.3831 24.7944 14.969L19.6767 9.86053L18.1726 11.361L23.2934 16.4695C23.7054 16.8835 24.3825 16.8835 24.7944 16.4695Z" fill="url(#paint13_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.44414 4.63686L9.13548 2.95271C9.30087 2.78772 9.57236 2.78772 9.73775 2.95271L11.4291 4.63686C11.9908 4.11699 12.3434 3.3792 12.3559 2.55736L10.0373 0.247486C9.70654 -0.0824954 9.16357 -0.0824954 8.83279 0.247486L6.51733 2.55736C6.52982 3.3792 6.88244 4.11699 7.44414 4.63686Z" fill="url(#paint14_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46094 14.1721V14.1752C4.46094 14.1877 4.46406 14.2001 4.46406 14.2157L8.83284 18.5739C9.16362 18.9039 9.7066 18.9039 10.0374 18.5739L16.9276 11.7003C16.6436 11.0186 16.2473 10.3991 15.7605 9.86053L9.7378 15.8687C9.57241 16.0306 9.30404 16.0306 9.13553 15.8687L4.95399 11.6972C4.63881 12.463 4.46094 13.2973 4.46094 14.1721Z" fill="url(#paint15_linear_7_440)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4167 20.1429L11.3915 18.1225L9.88428 19.6261L10.8953 20.6347C10.9109 20.6347 10.9234 20.6379 10.939 20.6379C11.819 20.6347 12.6553 20.4604 13.4167 20.1429Z" fill="url(#paint16_linear_7_440)"/>
              <path d="M65.8567 12.2893L71.27 11.7622C71.27 11.1669 71.1832 10.6678 71.0065 10.2616C70.8297 9.85546 70.5941 9.52372 70.2965 9.27258C69.9988 9.02145 69.6702 8.83232 69.3074 8.71141C68.9447 8.58739 68.5633 8.52538 68.1696 8.52538H68.0704C67.3232 8.56879 66.6783 8.71761 66.1388 8.97184C65.5993 9.22607 65.1994 9.60433 64.9327 10.1097L62.3904 9.15166C62.7655 8.05102 63.4631 7.2108 64.4863 6.62482C65.5094 6.04194 66.7031 5.7381 68.0673 5.7164H68.1665C69.0687 5.7164 69.8841 5.86522 70.6096 6.16286C71.3351 6.4605 71.9583 6.87906 72.4761 7.41853C72.9938 7.958 73.3876 8.59669 73.6635 9.33459C73.9395 10.0725 74.0759 10.891 74.0759 11.7932V21.5967H71.3041V19.2187C71.1708 19.4389 70.9693 19.6931 70.6933 19.9783C70.4174 20.2636 70.0887 20.5395 69.7043 20.803C69.3198 21.0666 68.8796 21.2991 68.3835 21.4975C67.8874 21.696 67.3542 21.7952 66.7837 21.7952H66.7186C65.9466 21.7952 65.2335 21.696 64.5731 21.4975C63.9127 21.2991 63.3453 21.0015 62.8741 20.6046C62.3997 20.2078 62.0276 19.7024 61.7517 19.0854C61.4758 18.4684 61.3394 17.7553 61.3394 16.9399C61.3394 16.2795 61.4541 15.6811 61.6866 15.1417C61.9191 14.6022 62.2416 14.134 62.6601 13.7372C63.0787 13.3403 63.5624 13.021 64.1142 12.7792C64.6568 12.5435 65.2397 12.3761 65.8567 12.2893ZM64.1731 16.943C64.2165 17.715 64.4863 18.2359 64.9823 18.5118C65.4784 18.7878 66.0551 18.9366 66.7155 18.9583H66.7496C68.2037 18.8932 69.264 18.4684 69.9368 17.6871C70.6065 16.9058 71.0313 15.768 71.208 14.2705L66.2194 14.8657C65.714 14.9774 65.2521 15.2192 64.8335 15.5912C64.415 15.9664 64.1948 16.4159 64.1731 16.943Z" fill="black"/>
              <path d="M78.9624 16.4159C79.4026 17.405 79.9514 18.0933 80.6118 18.4777C81.2722 18.8622 82.0659 19.0544 82.9898 19.0544C83.3401 19.0544 83.6843 19.0265 84.0129 18.9707C84.3416 18.9149 84.6392 18.8157 84.9028 18.673C85.1663 18.5304 85.3802 18.3382 85.5476 18.0964C85.712 17.8545 85.7957 17.5476 85.7957 17.1724C85.7957 16.7973 85.7027 16.4965 85.5166 16.264C85.3306 16.0315 85.0919 15.8393 84.8066 15.6873C84.5214 15.5323 84.2021 15.4176 83.8486 15.3401C83.4952 15.2626 83.1541 15.2037 82.8255 15.1572L81.7341 15.0238C81.0737 14.937 80.4258 14.7913 79.7871 14.596C79.1484 14.3976 78.5779 14.1185 78.0694 13.7527C77.5641 13.3899 77.1548 12.9342 76.8479 12.3823C76.5409 11.8335 76.3859 11.1824 76.3859 10.4352C76.3859 9.59811 76.5502 8.88502 76.882 8.28974C77.2106 7.69446 77.6478 7.21079 78.1873 6.83564C78.7267 6.46049 79.3437 6.18145 80.0351 5.99233C80.7296 5.8063 81.4489 5.71329 82.1992 5.71329C83.5634 5.71329 84.7849 6.01713 85.8639 6.62171C86.9428 7.22629 87.8017 8.24633 88.4403 9.67562L85.8329 10.7639C85.3709 9.94846 84.8625 9.35938 84.3137 8.99663C83.7618 8.63388 83.0704 8.45096 82.2333 8.45096C81.9047 8.45096 81.5729 8.47886 81.2443 8.53467C80.9125 8.59048 80.6118 8.68349 80.3358 8.81681C80.0599 8.95012 79.8336 9.12995 79.6599 9.36248C79.4832 9.59501 79.3964 9.88645 79.3964 10.2368C79.3964 10.5902 79.4956 10.8817 79.6941 11.1111C79.8925 11.3436 80.1436 11.5235 80.4537 11.6568C80.7606 11.7901 81.0985 11.8893 81.4613 11.9544C81.824 12.0195 82.1589 12.0753 82.4689 12.1188L83.5913 12.2521C84.2951 12.3389 84.9617 12.4846 85.588 12.6799C86.2142 12.8784 86.7692 13.1574 87.256 13.5232C87.7396 13.886 88.121 14.348 88.3938 14.9091C88.6698 15.4703 88.8062 16.1586 88.8062 16.9709C88.8062 17.8297 88.6419 18.5614 88.3101 19.166C87.9784 19.7706 87.5443 20.2667 87.0048 20.6511C86.4654 21.0356 85.8391 21.3177 85.1229 21.4944C84.4067 21.6711 83.6626 21.758 82.8937 21.758C82.2767 21.758 81.6225 21.6742 80.928 21.5099C80.2335 21.3456 79.5793 21.0852 78.9624 20.7348C78.3454 20.3845 77.7997 19.938 77.3284 19.3985C76.8541 18.8591 76.5068 18.2173 76.2898 17.467L78.9624 16.4159Z" fill="black"/>
              <path d="M90.4833 12.9497C90.4833 12.3792 90.5174 11.8149 90.5825 11.2661C90.6476 10.7174 90.8027 10.1872 91.0445 9.68182C91.7049 8.42615 92.5854 7.45262 93.6861 6.76122C94.7867 6.06673 96.0517 5.71948 97.4841 5.71948C98.7831 5.71948 99.983 6.06053 101.084 6.74262C102.184 7.42471 103.121 8.40444 103.89 9.68182L101.05 10.7701C100.191 9.25086 98.9909 8.49126 97.45 8.49126C96.7028 8.49126 96.0734 8.64008 95.568 8.93772C95.0626 9.23536 94.6503 9.62601 94.3309 10.1097C94.0116 10.5933 93.776 11.1483 93.6209 11.7777C93.4659 12.404 93.3884 13.0613 93.3884 13.7434V13.9418C93.4101 14.4038 93.4442 14.8595 93.4876 15.3122C93.531 15.7648 93.6209 16.1648 93.7512 16.5182C94.1015 17.2902 94.5976 17.901 95.2363 18.3506C95.875 18.8033 96.6129 19.0265 97.4469 19.0265C98.2158 19.0265 98.9196 18.8188 99.5583 18.4002C100.197 17.9816 100.724 17.3647 101.143 16.5523L103.983 17.6096C103.235 18.9304 102.299 19.9535 101.177 20.679C100.054 21.4045 98.8204 21.7673 97.4779 21.7673C96.0703 21.7673 94.8084 21.4169 93.6985 20.71C92.5854 20.0062 91.7018 19.0389 91.0414 17.8049C90.7562 17.2313 90.5887 16.5989 90.5453 15.9075C90.5019 15.213 90.4802 14.5588 90.4802 13.9418V12.9497H90.4833Z" fill="black"/>
              <path d="M106.066 9.18575C106.726 7.95488 107.607 7.06816 108.707 6.52869C109.808 5.98922 111.064 5.71948 112.471 5.71948C113.857 5.71948 115.113 5.98922 116.235 6.52869C117.358 7.06816 118.238 7.95488 118.877 9.18575C118.985 9.42758 119.084 9.71902 119.174 10.0601C119.261 10.4011 119.339 10.7639 119.407 11.1483C119.472 11.5328 119.522 11.9079 119.556 12.2707C119.59 12.6334 119.605 12.9466 119.605 13.2101V14.2983C119.605 14.937 119.562 15.6036 119.472 16.295C119.382 16.9895 119.187 17.6313 118.877 18.2266C118.238 19.4605 117.358 20.3566 116.235 20.9177C115.113 21.4789 113.857 21.758 112.471 21.758C111.085 21.758 109.836 21.4727 108.726 20.8991C107.613 20.3256 106.729 19.4357 106.069 18.2235C105.759 17.6282 105.557 16.9864 105.458 16.2919C105.359 15.5974 105.309 14.9339 105.309 14.2952V13.2721C105.309 12.9869 105.325 12.6613 105.359 12.2986C105.393 11.9358 105.443 11.5607 105.508 11.1762C105.573 10.7918 105.657 10.4228 105.756 10.0694C105.852 9.72522 105.957 9.42758 106.066 9.18575ZM112.471 19.0885C113.24 19.0885 113.891 18.9552 114.418 18.6916C114.945 18.4281 115.37 18.0654 115.69 17.6034C116.009 17.1414 116.235 16.5803 116.365 15.9199C116.499 15.2595 116.564 14.534 116.564 13.7403C116.564 12.9714 116.502 12.2614 116.384 11.6103C116.263 10.9623 116.049 10.4011 115.739 9.92675C115.429 9.45239 115.014 9.08344 114.483 8.8199C113.956 8.55637 113.284 8.42305 112.468 8.42305C111.696 8.42305 111.048 8.55017 110.521 8.8013C109.994 9.05553 109.569 9.41208 109.25 9.87404C108.931 10.336 108.698 10.8972 108.555 11.5576C108.413 12.218 108.342 12.9435 108.342 13.7372C108.342 14.4844 108.407 15.1851 108.54 15.833C108.673 16.481 108.89 17.0484 109.2 17.5321C109.507 18.0157 109.932 18.3971 110.472 18.6699C111.014 18.9521 111.678 19.0885 112.471 19.0885Z" fill="black"/>
              <path d="M124.687 5.952V8.2308C125.062 7.4619 125.568 6.85112 126.206 6.39846C126.845 5.9489 127.661 5.72256 128.65 5.72256C129.685 5.72256 130.566 5.9489 131.291 6.39846C132.017 6.85112 132.634 7.4619 133.139 8.2308C133.644 7.4619 134.274 6.85112 135.021 6.39846C135.768 5.9489 136.704 5.72256 137.827 5.72256C138.794 5.72256 139.616 5.87759 140.285 6.18453C140.955 6.49147 141.513 6.91623 141.953 7.4557C142.394 7.99517 142.719 8.64006 142.927 9.38726C143.135 10.1345 143.253 10.9623 143.274 11.8645V21.5316H140.072V11.9575C140.072 10.9902 139.83 10.1748 139.346 9.51438C138.862 8.85399 138.103 8.52534 137.067 8.52534C136.032 8.52534 135.263 8.84469 134.757 9.48337C134.252 10.1221 133.998 10.9468 133.998 11.9606V21.5316H130.795V11.9575C130.795 10.9902 130.553 10.1748 130.07 9.51438C129.586 8.85399 128.826 8.52534 127.791 8.52534C126.777 8.52534 126.024 8.85089 125.531 9.49888C125.035 10.1469 124.786 10.9685 124.786 11.9575V21.5316H121.618L121.584 5.9489H124.687V5.952Z" fill="black"/>
              <path d="M149.413 5.95201V8.23082C149.788 7.46192 150.293 6.85114 150.932 6.39847C151.571 5.94581 152.383 5.71948 153.375 5.71948C154.411 5.71948 155.291 5.94581 156.017 6.39537C156.742 6.84804 157.359 7.45882 157.865 8.22772C158.37 7.45882 158.999 6.84804 159.747 6.39537C160.494 5.94581 161.43 5.71948 162.552 5.71948C163.52 5.71948 164.341 5.8745 165.011 6.18144C165.681 6.48839 166.239 6.91314 166.679 7.45262C167.119 7.99209 167.445 8.63698 167.653 9.38418C167.86 10.1314 167.978 10.9592 168 11.8614V21.5316H164.797V11.9575C164.797 10.9902 164.555 10.1748 164.072 9.5144C163.588 8.85401 162.828 8.52536 161.793 8.52536C160.757 8.52536 159.988 8.84471 159.483 9.48339C158.978 10.1221 158.723 10.9468 158.723 11.9606V21.5316H155.521V11.9575C155.521 10.9902 155.279 10.1748 154.795 9.5144C154.312 8.85401 153.552 8.52536 152.516 8.52536C151.503 8.52536 150.749 8.85091 150.256 9.49889C149.76 10.1469 149.512 10.9685 149.512 11.9575V21.5316H146.343L146.309 5.94891H149.413V5.95201Z" fill="black"/>
              <path d="M45.0715 6.02954H48.3269L53.1326 17.1355L57.9383 6.02954H61.1937L54.6915 21.5316H51.6987L45.0715 6.02954Z" fill="black"/>
              <defs>
              <linearGradient id="paint0_linear_7_440" x1="0.00973761" y1="9.46142" x2="0.0224071" y2="9.46142" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F15F3D"/>
              <stop offset="1" stop-color="#FFED2F"/>
              </linearGradient>
              <linearGradient id="paint1_linear_7_440" x1="0.00973761" y1="9.46142" x2="0.0224071" y2="9.46142" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F15F3D"/>
              <stop offset="1" stop-color="#FFED2F"/>
              </linearGradient>
              <linearGradient id="paint2_linear_7_440" x1="1.86873" y1="15.3666" x2="5.62647" y2="8.84231" gradientUnits="userSpaceOnUse">
              <stop stop-color="#00AEEF"/>
              <stop offset="1" stop-color="#2E3192"/>
              </linearGradient>
              <linearGradient id="paint3_linear_7_440" x1="-6.85396" y1="6.19084" x2="11.6514" y2="6.19084" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F15F3D"/>
              <stop offset="1" stop-color="#FFED2F"/>
              </linearGradient>
              <linearGradient id="paint4_linear_7_440" x1="27.8286" y1="6.53845" x2="33.832" y2="6.53845" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2E3192"/>
              <stop offset="1" stop-color="#00AEEF"/>
              </linearGradient>
              <linearGradient id="paint5_linear_7_440" x1="35.4262" y1="9.38459" x2="35.4306" y2="9.38459" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F15F3D"/>
              <stop offset="1" stop-color="#FFED2F"/>
              </linearGradient>
              <linearGradient id="paint6_linear_7_440" x1="27.3572" y1="11.6446" x2="35.4318" y2="11.6446" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2E3192"/>
              <stop offset="1" stop-color="#00AEEF"/>
              </linearGradient>
              <linearGradient id="paint7_linear_7_440" x1="21.2692" y1="2.94848" x2="30.7302" y2="2.94848" gradientUnits="userSpaceOnUse">
              <stop stop-color="#8ED8F8"/>
              <stop offset="1" stop-color="#0095DA"/>
              </linearGradient>
              <linearGradient id="paint8_linear_7_440" x1="15.8589" y1="9.05089" x2="19.2243" y2="9.05089" gradientUnits="userSpaceOnUse">
              <stop stop-color="white"/>
              <stop offset="1"/>
              </linearGradient>
              <linearGradient id="paint9_linear_7_440" x1="18.17" y1="13.3211" x2="24.9024" y2="13.3211" gradientUnits="userSpaceOnUse">
              <stop stop-color="white"/>
              <stop offset="1"/>
              </linearGradient>
              <linearGradient id="paint10_linear_7_440" x1="20.6194" y1="6.04951" x2="19.358" y2="8.23968" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2E3192"/>
              <stop offset="1" stop-color="#00AEEF"/>
              </linearGradient>
              <linearGradient id="paint11_linear_7_440" x1="9.88617" y1="22.0861" x2="25.0853" y2="22.0861" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2E3192"/>
              <stop offset="1" stop-color="#00AEEF"/>
              </linearGradient>
              <linearGradient id="paint12_linear_7_440" x1="1.604" y1="6.33681" x2="19.2237" y2="6.33681" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2E3192"/>
              <stop offset="1" stop-color="#00AEEF"/>
              </linearGradient>
              <linearGradient id="paint13_linear_7_440" x1="23.63" y1="16.8401" x2="19.8378" y2="10.2559" gradientUnits="userSpaceOnUse">
              <stop stop-color="#00AEEF"/>
              <stop offset="1" stop-color="#2E3192"/>
              </linearGradient>
              <linearGradient id="paint14_linear_7_440" x1="6.51783" y1="2.31756" x2="12.3526" y2="2.31756" gradientUnits="userSpaceOnUse">
              <stop stop-color="#8ED8F8"/>
              <stop offset="1" stop-color="#0095DA"/>
              </linearGradient>
              <linearGradient id="paint15_linear_7_440" x1="4.46038" y1="14.3418" x2="16.929" y2="14.3418" gradientUnits="userSpaceOnUse">
              <stop stop-color="#8ED8F8"/>
              <stop offset="1" stop-color="#0095DA"/>
              </linearGradient>
              <linearGradient id="paint16_linear_7_440" x1="9.8854" y1="19.3796" x2="13.417" y2="19.3796" gradientUnits="userSpaceOnUse">
              <stop stop-color="#8ED8F8"/>
              <stop offset="1" stop-color="#00AEEF"/>
              </linearGradient>
              </defs>
              </svg>
              </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo in vestibulum, sed dapibus tristique nullam.
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bantuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tanya Jawab </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hubungi Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cara Berjualan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tentang Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About US</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Karir</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat dan Ketentuan</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Mitra</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Suplier</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('assets/') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets/') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets/') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets/') }}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('assets/') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/') }}/js/main.js"></script>

</body>

</html>