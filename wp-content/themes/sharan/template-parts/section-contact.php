<?php
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
?>

<section id="contact" class="contact section-dark">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6">
              <?php if ( $eyebrow ) : ?>
                <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
              <?php endif; ?>

              <?php if ( $heading ) : ?>
                <h2><?php echo esc_html( $heading ); ?></h2>
              <?php endif; ?>

              <?php if ( $content ) : ?>
                <?php echo wp_kses_post( $content ); ?>
              <?php endif; ?>
              <address>
                <div class="d-flex align-items-center">
                  <svg
                    class="me-3"
                    xmlns="http://www.w3.org/2000/svg"
                    width="21"
                    height="16"
                    viewBox="0 0 21 16"
                    fill="none"
                  >
                    <path
                      d="M0.65625 0H0V16H21V0H0.65625ZM19.6875 2.33333V2.99583L10.5 9.84167L1.3125 2.99583V1.33333H19.6875V2.33333ZM19.6875 4.65V14.6667H1.3125V4.65L10.1104 11.2042L10.5 11.4917L10.8896 11.2042L19.6875 4.65Z"
                      fill="#F1F0EE"
                    />
                  </svg>

                  <a href="mailto:info@sharantransport.com">
                    info@sharantransport.com</a
                  >
                </div>

                <div class="d-flex align-items-center">
                  <svg
                    class="me-3"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M6.57187 9.89062L9.75 6.75L6 0L0 3V3.75C0 14.9344 9.06562 24 20.25 24H21L24 18L17.25 14.25L14.1094 17.4281C10.8047 15.8578 8.14219 13.1953 6.57187 9.89062ZM17.3812 15.1828L23.0062 18.3094L20.5359 23.2547H20.25C9.48281 23.25 0.75 14.5219 0.75 3.75V3.46406L5.69062 0.99375L8.81719 6.61875L6.04219 9.36094L5.6625 9.73594L5.89219 10.2188C7.5375 13.6781 10.3219 16.4672 13.7812 18.1078L14.2641 18.3375L14.6391 17.9578L17.3812 15.1828Z"
                      fill="#F1F0EE"
                    />
                  </svg>

                  <a href="tel:+447709889608">+44 7709 889608</a>
                </div>

                <div class="d-flex">
                  <svg
                    class="me-4"
                    xmlns="http://www.w3.org/2000/svg"
                    width="17"
                    height="24"
                    viewBox="0 0 17 24"
                    fill="none"
                  >
                    <path
                      d="M17 8.57273C17 13.9773 11.7141 20.4545 9.47839 22.95C8.88073 23.6182 8.5 24 8.5 24C8.5 24 8.11927 23.6182 7.52161 22.95C5.28594 20.4545 0 13.9773 0 8.57273C0 3.83636 3.80729 0 8.5 0C13.1927 0 17 3.83636 17 8.57273ZM1.41667 8.57273C1.41667 9.99546 1.8638 11.6 2.61198 13.2636C3.35573 14.9182 4.3651 16.55 5.39219 18C6.54766 19.6273 7.70312 21 8.49557 21.8909C9.28802 21.0045 10.4479 19.6273 11.599 18C12.626 16.5455 13.6354 14.9182 14.3792 13.2636C15.1318 11.5955 15.5745 9.99546 15.5745 8.57273C15.5745 4.66818 12.4268 1.45455 8.49115 1.45455C4.55547 1.45455 1.41667 4.66364 1.41667 8.57273ZM6.375 8.72727C6.375 9.93182 7.32682 10.9091 8.5 10.9091C9.67318 10.9091 10.625 9.93182 10.625 8.72727C10.625 7.52273 9.67318 6.54545 8.5 6.54545C7.32682 6.54545 6.375 7.52273 6.375 8.72727ZM8.5 12.3636C6.54323 12.3636 4.95833 10.7364 4.95833 8.72727C4.95833 6.71818 6.54323 5.09091 8.5 5.09091C10.4568 5.09091 12.0417 6.71818 12.0417 8.72727C12.0417 10.7364 10.4568 12.3636 8.5 12.3636Z"
                      fill="#F1F0EE"
                    />
                  </svg>

                  <a
                    class="text-decoration-none"
                    href="https://www.google.com/maps/dir/?api=1&destination=East+Belfast+Enterprise,+68–72+Newtownards+Road,+Belfast+BT4+1GW"
                    target="_blank"
                    rel="noopener noreferrer"
                    >East Belfast Enterprise,<br />68–72 Newtownards Road,<br />Belfast
                    BT4 1GW</a
                  >
                </div>
              </address>
            </div>
            <div class="col-lg-6">
              <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]'); ?>
            </div>
          </div>
        </div>
      </section>
