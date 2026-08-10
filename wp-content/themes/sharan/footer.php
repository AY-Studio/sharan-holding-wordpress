<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SuperCupNI
 */

?>

</main>


	<footer class="site-footer">
      <div class="newsletter">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <h2>Stay in touch</h2>
            <p>
              Be the first to hear about our new destinations, exclusive offers
              and more.
            </p>
          </div>
          <div class="col-lg-5">

            <?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"]'); ?>
            <small
                >By clicking Sign Up you're confirming that you agree with our
                <a href="#">Terms and Conditions</a>.</small
              >
          </div>
        </div>
      </div>
      <div class="footer-main text-center">
        <div class="container">
          <img
            class="footer-logo"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png"
            alt="SHARAN Executive Transport"
          />
          <div class="row g-5 footer-links">
            <div class="col-md-6 col-lg-3">
              <h3>Explore</h3>
              <ul>
                <li><a href="#services">Tours</a></li>
                <li><a href="#services">Golf</a></li>
                <li><a href="#contact">Weddings</a></li>
                <li><a href="#contact">Formals</a></li>
                <li><a href="#contact">Private parties</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h3>Services</h3>
              <ul>
                <li><a href="#services">Corporate hire</a></li>
                <li><a href="#services">Airport transfers</a></li>
                <li><a href="#services">Hotel pickups</a></li>
                <li><a href="#contact">Contracts</a></li>
                <li><a href="#fleet">Fleet</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h3>Locations</h3>
              <ul>
                <li><a href="#contact">Belfast</a></li>
                <li><a href="#contact">Dublin</a></li>
                <li><a href="#contact">Galway</a></li>
                <li><a href="#contact">Cork</a></li>
                <li><a href="#contact">Derry/Londonderry</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h3>Get in touch</h3>
              <ul>
                <li><a href="tel:+447709889608">+44 7709 889608</a></li>
                <li>
                  <a href="mailto:info@sharantransport.com"
                    >info@sharantransport.com</a
                  >
                </li>
              </ul>
              <p>
                City East Business Centre<br />68–72 Newtownards Road<br />Belfast,
                BT4 1GW, N. Ireland
              </p>
            </div>
          </div>
          <p class="footer-tagline">Driven by excellence</p>
        </div>
        <div class="footer-bottom mx-auto">
          <span
            >© Copyright SHARAN <?php echo date('Y'); ?> | Website by
            <a
              href="https://astutely.agency/"
              target="_blank"
              class="byline"
              rel="noopener noreferrer"
            >
              
              <svg
                id="Layer_2"
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                viewBox="0 0 1111.3 262.3"
              >
                <!-- Generator: Adobe Illustrator 30.6.0, SVG Export Plug-In . SVG Version: 2.1.4 Build 109)  -->
                <defs>
                  <style>
                    .st0 {
                      fill: #fff;
                    }
                  </style>
                </defs>
                <g id="Layer_1-2">
                  <path
                    class="st0"
                    d="M12.8,147.5l30.9-2.5L121.3,21.5l55.3,13.9-.8,190-48-14.3.4-45.9-64.7,5.4-36.3,58.4L0,214.4l25.9-40.9-6.8.7-6.2-26.7h0ZM129.4,64.6l-48.1,77.2,47.3-3.7.8-73.5h0Z"
                  />
                  <path
                    class="st0"
                    d="M269.7,94.7c-6.9.2-12.7,1.7-17.4,4.5-4.7,2.8-6.9,6-6.9,9.5,0,2.7,2,4.8,5.9,6.4s8.8,3,14.8,4.3c6,1.3,12.4,2.8,19.1,4.6s13.1,4.3,19.2,7.4c6.1,3.1,11.1,7.3,15,12.4,3.9,5.1,6,11.9,6.2,20.1s-1.9,16-6.2,23.1c-4.3,7.1-10.3,13.4-18,18.8s-16.8,9.7-27.2,12.8c-10.4,3.1-21.6,4.8-33.6,5.1-16.6.4-30-2.2-40.4-7.9-10.4-5.7-15.6-13.5-15.9-23.4-.2-6.8,2.1-12.8,6.7-18.3,4.6-5.4,11.1-9.6,19.5-12.5l30.9,11.9c-7.5,3.4-11.2,7.6-11.1,12.7,0,2.7,1.6,5,4.6,6.9s7.7,2.7,14.1,2.6c9.6-.2,17.2-2.5,22.6-6.8s8.2-8.5,8.1-12.7c0-3.5-2-6.2-5.8-8.1-3.8-1.9-8.5-3.3-14.3-4.5-5.8-1.1-11.9-2.4-18.5-3.9-6.5-1.4-12.8-3.5-18.6-6.1s-10.7-6.4-14.5-11.3c-3.8-4.9-5.7-11.3-5.9-19.2-.2-10.3,2.9-19.7,9.3-28.1,6.5-8.4,15.3-15.1,26.4-20.1,11.1-5,23.5-7.7,37.2-8,10.3-.2,19.7.9,28.3,3.5s15.5,6.4,20.8,11.4c5.3,5,8,11,8.2,17.9.1,4.6-1,9-3.2,13.2-2.3,4.3-5.5,8-9.9,11.1l-35.8-13.3c3.3-2.3,5-4.8,4.9-7.5,0-2.4-1.7-4.4-4.8-6.2-3.2-1.8-7.8-2.6-13.9-2.4h0Z"
                  />
                  <path
                    class="st0"
                    d="M339.1,68l37.5-1.7,14-41.4,43.2,14.2-8.3,24.8,39.7-1.5-8.9,27.6-40.2,1.7-23.6,70.7c5.4-5.9,11-11.6,16.7-17.2,5.7-5.6,11.5-11,17.5-16.2l18,20.9c-12.8,10.9-25.1,22.4-37.1,34.2-12,11.9-23.5,24.1-34.7,36.7l-43.2-14.2,37.8-112.4-21,1-7.2-27.2h0Z"
                  />
                  <path
                    class="st0"
                    d="M609.3,73.9l-47.5,142.3-43.2-14.2,22.5-66.2c-10.8,14.4-21.8,28.6-33.1,42.3s-22.7,27.1-34.4,40.1l-42.4-14.2,47.5-142.3,43.2,14.2-27.2,80.5c13.3-15.5,26.1-31.3,38.4-47.4,12.3-16.1,23.5-32.5,33.8-49.3l42.4,14.2h0Z"
                  />
                  <path
                    class="st0"
                    d="M621.3,61.1l21.2-1.3,14-41.4,43.2,14.2-8.3,24.8,40.7-1.1-9.9,27.2-40.2,1.7-23.6,70.8c5.4-5.9,11-11.6,16.7-17.2,5.7-5.6,11.5-11,17.5-16.2l18,20.9c-12.8,10.9-25.1,22.4-37.1,34.2s-23.5,24.1-34.7,36.7l-43.2-14.2,37.8-112.4-21,1,9-27.6h0Z"
                  />
                  <path
                    class="st0"
                    d="M838.1,172.6c-6,11.1-14.8,20.2-26.3,27.4s-24.4,10.9-38.4,11.2c-13.2.3-24.2-2-33-7.1s-15.5-11.9-20-20.7-6.9-18.6-7.2-29.6c-.2-6.2.2-12.2,1.1-17.9s2.3-11.4,4.2-17.2c4.2-12.9,10.6-24.2,19-33.7,8.4-9.5,18-16.9,29-22.2s22.4-8.1,34.4-8.4c15.5-.4,28,3,37.4,10,9.4,7,14.2,16.7,14.5,29,.4,15.4-6.5,27.9-20.8,37.6s-34.6,16-61.2,18.8l-8.3-16.8c-2.5,9.9-3.6,18.6-3.4,26.2s1.7,13.2,4.6,17.4c2.9,4.1,7.1,6.2,12.7,6,5.2-.1,10.2-2.4,14.8-6.8,4.6-4.4,8.5-11.1,11.7-19.9l35.4,16.6h0ZM798.4,81.8c-5.9.1-11.7,3.7-17.4,10.6-5.7,6.9-10.7,16.9-15.1,30,10.3-1.3,18.6-3.6,24.9-7.1,6.3-3.4,11-7.4,13.9-11.7s4.4-8.4,4.3-12.1c-.2-6.6-3.7-9.8-10.6-9.6h0Z"
                  />
                  <path
                    class="st0"
                    d="M900.8,0l43.2,14.2-65.5,194.4-43.2-14.2L900.8,0Z"
                  />
                  <path
                    class="st0"
                    d="M1078.4,62.8l-67.4,199.5-43.2-14.2,40.9-121.3c-20.6,27.5-42.5,54.2-65.7,80.1l-43.2-14.2,47.5-142,43.2,14.2-26.7,79.9c13-15.3,25.5-31.1,37.5-47.1,12-16.1,23.2-32.4,33.4-49.1l43.7,14.2h0Z"
                  />
                  <path
                    class="st0"
                    d="M1068.7,146.9l42.6,11.6-15.1,44.7-42.6-11.6,15.1-44.7Z"
                  />
                </g>
              </svg>
            </a>
          </span>
          <span class="footer-social">
            <a
              href="https://www.instagram.com/sharan_executivetransport/"
              target="_blank"
              aria-label="Instagram"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M16 3.24268H8C5.23858 3.24268 3 5.48126 3 8.24268V16.2427C3 19.0041 5.23858 21.2427 8 21.2427H16C18.7614 21.2427 21 19.0041 21 16.2427V8.24268C21 5.48126 18.7614 3.24268 16 3.24268ZM19.25 16.2427C19.2445 18.0353 17.7926 19.4872 16 19.4927H8C6.20735 19.4872 4.75549 18.0353 4.75 16.2427V8.24268C4.75549 6.45003 6.20735 4.99817 8 4.99268H16C17.7926 4.99817 19.2445 6.45003 19.25 8.24268V16.2427ZM16.75 8.49268C17.3023 8.49268 17.75 8.04496 17.75 7.49268C17.75 6.9404 17.3023 6.49268 16.75 6.49268C16.1977 6.49268 15.75 6.9404 15.75 7.49268C15.75 8.04496 16.1977 8.49268 16.75 8.49268ZM12 7.74268C9.51472 7.74268 7.5 9.7574 7.5 12.2427C7.5 14.728 9.51472 16.7427 12 16.7427C14.4853 16.7427 16.5 14.728 16.5 12.2427C16.5027 11.0484 16.0294 9.90225 15.1849 9.05776C14.3404 8.21327 13.1943 7.74002 12 7.74268ZM9.25 12.2427C9.25 13.7615 10.4812 14.9927 12 14.9927C13.5188 14.9927 14.75 13.7615 14.75 12.2427C14.75 10.7239 13.5188 9.49268 12 9.49268C10.4812 9.49268 9.25 10.7239 9.25 12.2427Z"
                ></path>
              </svg>
            </a>
            <a
              href="https://www.linkedin.com/in/sharan-executive-transport-46a775335/"
              target="_blank"
              aria-label="LinkedIn"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.5 3.24268C3.67157 3.24268 3 3.91425 3 4.74268V19.7427C3 20.5711 3.67157 21.2427 4.5 21.2427H19.5C20.3284 21.2427 21 20.5711 21 19.7427V4.74268C21 3.91425 20.3284 3.24268 19.5 3.24268H4.5ZM8.52076 7.2454C8.52639 8.20165 7.81061 8.79087 6.96123 8.78665C6.16107 8.78243 5.46357 8.1454 5.46779 7.24681C5.47201 6.40165 6.13998 5.72243 7.00764 5.74212C7.88795 5.76181 8.52639 6.40728 8.52076 7.2454ZM12.2797 10.0044H9.75971H9.7583V18.5643H12.4217V18.3646C12.4217 17.9847 12.4214 17.6047 12.4211 17.2246C12.4203 16.2108 12.4194 15.1959 12.4246 14.1824C12.426 13.9363 12.4372 13.6804 12.5005 13.4455C12.7381 12.568 13.5271 12.0013 14.4074 12.1406C14.9727 12.2291 15.3467 12.5568 15.5042 13.0898C15.6013 13.423 15.6449 13.7816 15.6491 14.129C15.6605 15.1766 15.6589 16.2242 15.6573 17.2719C15.6567 17.6417 15.6561 18.0117 15.6561 18.3815V18.5629H18.328V18.3576C18.328 17.9056 18.3278 17.4537 18.3275 17.0018C18.327 15.8723 18.3264 14.7428 18.3294 13.6129C18.3308 13.1024 18.276 12.599 18.1508 12.1054C17.9638 11.3713 17.5771 10.7638 16.9485 10.3251C16.5027 10.0129 16.0133 9.81178 15.4663 9.78928C15.404 9.78669 15.3412 9.7833 15.2781 9.77989C14.9984 9.76477 14.7141 9.74941 14.4467 9.80334C13.6817 9.95662 13.0096 10.3068 12.5019 10.9241C12.4429 10.9949 12.3852 11.0668 12.2991 11.1741L12.2797 11.1984V10.0044ZM5.68164 18.5671H8.33242V10.01H5.68164V18.5671Z"
                ></path>
              </svg>
            </a>
            <a
              href="https://www.facebook.com/profile.php?id=61562169659167"
              target="_blank"
              aria-label="Facebook"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  d="M22 12.3038C22 6.74719 17.5229 2.24268 12 2.24268C6.47715 2.24268 2 6.74719 2 12.3038C2 17.3255 5.65684 21.4879 10.4375 22.2427V15.2121H7.89844V12.3038H10.4375V10.0872C10.4375 7.56564 11.9305 6.1728 14.2146 6.1728C15.3088 6.1728 16.4531 6.36931 16.4531 6.36931V8.84529H15.1922C13.95 8.84529 13.5625 9.6209 13.5625 10.4166V12.3038H16.3359L15.8926 15.2121H13.5625V22.2427C18.3432 21.4879 22 17.3257 22 12.3038Z"
                ></path>
              </svg>
            </a>
            <a
              href="https://www.tiktok.com/@sharan.transport"
              target="_blank"
              aria-label="TikTok"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                height="24px"
                viewBox="0 0 448 512"
              >
                <path
                  d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"
                ></path>
              </svg>
            </a>

            <a
              href="https://www.tripadvisor.co.uk/Attraction_Review-g186476-d28117340-Reviews-Sharan_Executive_Transport-Castlewellan_County_Down_Northern_Ireland.html"
              target="_blank"
              aria-label="Tripadvisor"
            >
              <svg
                width="24px"
                viewBox="0 -96 512.2 512.2"
                id="Layer_2"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
              >
                <path
                  class="st0"
                  d="M128.2 127.9C92.7 127.9 64 156.6 64 192c0 35.4 28.7 64.1 64.1 64.1 35.4 0 64.1-28.7 64.1-64.1.1-35.4-28.6-64.1-64-64.1zm0 110c-25.3 0-45.9-20.5-45.9-45.9s20.5-45.9 45.9-45.9S174 166.7 174 192s-20.5 45.9-45.8 45.9z"
                />
                <circle class="st0" cx="128.4" cy="191.9" r="31.9" />
                <path
                  class="st0"
                  d="M384.2 127.9c-35.4 0-64.1 28.7-64.1 64.1 0 35.4 28.7 64.1 64.1 64.1 35.4 0 64.1-28.7 64.1-64.1 0-35.4-28.7-64.1-64.1-64.1zm0 110c-25.3 0-45.9-20.5-45.9-45.9s20.5-45.9 45.9-45.9S430 166.7 430 192s-20.5 45.9-45.8 45.9z"
                />
                <circle class="st0" cx="384.4" cy="191.9" r="31.9" />
                <path
                  class="st0"
                  d="M474.4 101.2l37.7-37.4h-76.4C392.9 29 321.8 0 255.9 0c-66 0-136.5 29-179.3 63.8H0l37.7 37.4C14.4 124.4 0 156.5 0 192c0 70.8 57.4 128.2 128.2 128.2 32.5 0 62.2-12.1 84.8-32.1l43.4 31.9 42.9-31.2-.5-1.2c22.7 20.2 52.5 32.5 85.3 32.5 70.8 0 128.2-57.4 128.2-128.2-.1-35.4-14.6-67.5-37.9-90.7zM368 64.8c-60.7 7.6-108.3 57.6-111.9 119.5-3.7-62-51.4-112.1-112.3-119.5 30.6-22 69.6-32.8 112.1-32.8S337.4 42.8 368 64.8zM128.2 288.2C75 288.2 32 245.1 32 192s43.1-96.2 96.2-96.2 96.2 43.1 96.2 96.2c-.1 53.1-43.1 96.2-96.2 96.2zm256 0c-53.1 0-96.2-43.1-96.2-96.2s43.1-96.2 96.2-96.2 96.2 43.1 96.2 96.2c-.1 53.1-43.1 96.2-96.2 96.2z"
                />
              </svg>
            </a>
            <a
              href="https://www.google.com/maps/place/Sharan+Executive+Transport/@53.3834,-8.0966951,7z/data=!3m1!4b1!4m6!3m5!1s0xa609eda89d0da43:0xf590ee6a9b9feef8!8m2!3d53.3834!4d-8.0966951!16s%2Fg%2F11wflv04vm?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D"
              target="_blank"
              aria-label="Google"
            >
              <svg
                fill="currentColor"
                fill-rule="evenodd"
                width="24px"
                height="24px"
                style="flex: none; line-height: 1"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Google</title>
                <path
                  d="M23 12.245c0-.905-.075-1.565-.236-2.25h-10.54v4.083h6.186c-.124 1.014-.797 2.542-2.294 3.569l-.021.136 3.332 2.53.23.022C21.779 18.417 23 15.593 23 12.245z"
                ></path>
                <path
                  d="M12.225 23c3.03 0 5.574-.978 7.433-2.665l-3.542-2.688c-.948.648-2.22 1.1-3.891 1.1a6.745 6.745 0 01-6.386-4.572l-.132.011-3.465 2.628-.045.124C4.043 20.531 7.835 23 12.225 23z"
                ></path>
                <path
                  d="M5.84 14.175A6.65 6.65 0 015.463 12c0-.758.138-1.491.361-2.175l-.006-.147-3.508-2.67-.115.054A10.831 10.831 0 001 12c0 1.772.436 3.447 1.197 4.938l3.642-2.763z"
                ></path>
                <path
                  d="M12.225 5.253c2.108 0 3.529.892 4.34 1.638l3.167-3.031C17.787 2.088 15.255 1 12.225 1 7.834 1 4.043 3.469 2.197 7.062l3.63 2.763a6.77 6.77 0 016.398-4.572z"
                ></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.3.23/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>


</body>
</html>
