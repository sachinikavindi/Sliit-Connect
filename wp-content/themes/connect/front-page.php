<?php get_header(); ?>

<?php $hero = get_field('hero_section'); ?>
<?php $service = get_field('service_section'); ?>
  <main id="primary" class="site-main">
    <!-- start: Banner Section -->
    <section class="tj-banner-section section-gap-x">
      <div class="banner-area">
        <div class="banner-right-box">
          <div class="banner-img">
            <?php if (!empty($hero['left_box_image'])) : ?>
              <img src="<?php echo esc_url($hero['left_box_image']); ?>" alt="">
            <?php endif; ?>
          </div>
        </div>
        <div class="banner-left-box">
          <div class="banner-content">

            <h1 class="banner-title title-anim"><?php echo esc_html($hero['main_title'] ?? ''); ?>
            <span><?php echo esc_html($hero['main_title_span'] ?? ''); ?></span>
            </h1>
            <p class="banner-sub-desc wow fadeInUp" data-wow-delay=".4s">
            <?php echo esc_html($hero['sub_description']); ?>
            </p>
            <div class="banner-action-row wow fadeInUp" data-wow-delay=".6s">
              <?php
              $hero_link = $hero['link'] ?? '';
              $hero_link_url = is_array($hero_link) ? ($hero_link['url'] ?? '') : $hero_link;
              ?>
              <?php if ($hero_link_url) : ?>
              <a class="tj-primary-btn btn-no-rotate" href="<?php echo esc_url($hero_link_url); ?>">
                <span class="btn-text"><span>
                <?php echo esc_html($hero['link_text'] ?? ''); ?>
                </span></span>
                <span class="btn-icon"><i class="tji-play"></i></span>
              </a>
              <?php endif; ?>
            </div>

          </div>

          <!-- Corner graphic (behind video box) and the video box itself -->
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/hero/banner-image.png" alt="Graduation illustration"
            class="banner-corner-illustration wow fadeIn" data-wow-delay=".8s">

          <div class="banner-video-card wow fadeInUp" data-wow-delay=".7s">
            <div class="video-card-thumb">
              <?php if (!empty($hero['video_image'])) : ?>
                <img src="<?php echo esc_url($hero['video_image']); ?>" alt="Video Thumbnail">
              <?php endif; ?>
              <?php
              $video_link = $hero['video_link'] ?? '';
              $video_url = is_array($video_link) ? ($video_link['url'] ?? '') : $video_link;
              ?>
              <?php if ($video_url) : ?>
              <a class="video-card-play video-btn video-popup" data-autoplay="true" data-vbtype="video"
                data-maxwidth="1200px" href="<?php echo esc_url($video_url); ?>">
                <span><i class="tji-play"></i></span>
              </a>
              <?php endif; ?>
            </div>
              <div class="video-card-text">
                <?php echo esc_html($hero['video_text'] ?? ''); ?>
              </div>
          </div>

        </div>
        <div class="banner-scroll wow fadeInDown" data-wow-delay="2s">
          <a href="#choose" class="scroll-down">
            <span><i class="tji-arrow-down-long"></i></span>
            Scroll Down
          </a>
        </div>
    </section>
    <!-- end: Banner Section -->

    <!-- start: Choose Section -->
    <section id="pathways" class="tj-choose-section section-gap">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="sec-heading text-center">

              <h2 class="sec-title title-anim">Explore Study <span>Pathways.</span></h2>
            </div>
          </div>
        </div>
        <div class="pathway-grid">

          <!-- Item 1: Computing -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".2s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/computing.png" alt="Computing pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">COMPUTING</h4>
            </div>
          </div>

          <!-- Item 2: Business -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".3s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/business.png" alt="Business pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">BUSINESS</h4>
            </div>
          </div>

          <!-- Item 3: Psychology -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".4s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/phycology.png" alt="Psychology pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">PSYCHOLOGY</h4>
            </div>
          </div>

          <!-- Item 4: Nursing -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".5s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/nursing.png" alt="Nursing pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">NURSING</h4>
            </div>
          </div>

          <!-- Item 5: Fashion Business -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".6s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/fashion%20business.png" alt="Fashion Business pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">FASHION BUSINESS</h4>
            </div>
          </div>

          <!-- Item 6: Quantity Surveying -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".7s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/quantity%20surveying.png" alt="Quantity Surveying pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">QUANTITY SURVEYING</h4>
            </div>
          </div>

          <!-- Item 7: Interior Design -->
          <div class="pathway-item wow fadeInUp" data-wow-delay=".8s">
            <div class="pathway-icon-box">
              <div class="icon-bg-circle"></div>
              <div class="pathway-icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/pathways/interior%20design.png" alt="Interior Design pathway icon" loading="lazy">
              </div>
            </div>
            <div class="pathway-text">
              <span class="pathway-sub">PATHWAY FOR</span>
              <h4 class="pathway-title">INTERIOR DESIGN</h4>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end: Choose Section -->



    <!-- start: Service Section -->
    <section class="tj-service-section overflow-hidden section-gap section-gap-x">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Column: Content -->
          <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay=".3s">
            <div class="why-sliit-content">
              <div class="why-sliit-badge">
                <span>🎓 WHY SLIIT CONNECT</span>
              </div>
              <h2 class="why-sliit-title">Empowering Tomorrow’s Professionals Through Innovation, Excellence, and 
Industry-Focused Education.</h2>
              <p class="why-sliit-desc">At SLIIT CONNECT Campus, we provide students with a transformative learning and
                strong industry collaborations designed to shape future-ready graduates.</p>

              <!-- Stats Block -->
              <div class="why-sliit-stats">
                <div class="why-sliit-stat-item">
                  <span class="stat-number"><?php echo esc_html($service['count1'] ?? ''); ?></span>
                  <span class="stat-label"><?php echo esc_html($service['count1_text'] ?? ''); ?></span>
                 
                </div>
                <div class="why-sliit-stat-item">
                  <span class="stat-number"><?php echo esc_html($service['count2'] ?? ''); ?></span>
                  <span class="stat-label"><?php echo esc_html($service['count2_text'] ?? ''); ?></span>
                </div>
              </div>

              <!-- CTA Button -->
              <a href="service-details.html" class="why-sliit-btn">
                <span>Explore More</span>
                <span class="btn-arrow-circle">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 10.5L10.5 1.5M10.5 1.5H3.5M10.5 1.5V8.5" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <!-- Right Column: Image -->
          <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay=".4s">
            <div class="why-sliit-image-wrapper">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/sliitconnect.png" alt="SLIIT Campus" class="why-sliit-img">
            </div>
          </div>
        </div>
      </div>
      <div class="bg-shape-1">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/pattern-2.svg" alt="">
      </div>
      <div class="bg-shape-2">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/pattern-3.svg" alt="">
      </div>
    </section>
    <!-- end: Service Section -->


    <!-- start: Testimonial Section -->
    <?php
    $testimonials_query = new WP_Query(array(
      'post_type'      => 'testimonial',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    ));
    ?>
    <section class="tj-testimonial-section-3 section-gap">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <?php if ($testimonials_query->have_posts()) : ?>
            <div class="testimonial-wrapper-2 wow fadeInUp" data-wow-delay=".4s">
              <h5 class="sec-title">Our Students <span>Success Stories</span></h5>
              <div class="swiper client-thumb">
                <div class="swiper-wrapper">
                  <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                    <?php
                    $student_image = get_field('student_image');
                    $image_url = is_array($student_image) ? ($student_image['url'] ?? '') : $student_image;
                    $image_alt = is_array($student_image) ? ($student_image['alt'] ?? '') : (get_field('student_name') ?: get_the_title());
                    ?>
                  <div class="swiper-slide thumb-item">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                      <div class="thumb-img">
                        <?php if ($image_url) : ?>
                          <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                        <?php endif; ?>
                      </div>
                      <div class="author-header">
                        <h4 class="title"><?php echo esc_html(get_field('student_name')); ?></h4>
                        <span class="designation"><?php echo esc_html(get_field('course_name')); ?></span>
                      </div>
                    </a>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <div class="testimonial-navigation d-none d-md-inline-flex">
                <div class="slider-prev">
                  <span class="anim-icon">
                    <i class="tji-arrow-left"></i>
                    <i class="tji-arrow-left"></i>
                  </span>
                </div>
                <div class="slider-next">
                  <span class="anim-icon">
                    <i class="tji-arrow-right"></i>
                    <i class="tji-arrow-right"></i>
                  </span>
                </div>
              </div>
              <div class="swiper testimonial-slider-3">
                <div class="swiper-wrapper">
                  <?php
                  $testimonials_query->rewind_posts();
                  while ($testimonials_query->have_posts()) :
                    $testimonials_query->the_post();
                  ?>
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="desc">
                        <p><?php echo esc_html(get_field('testimonial_description')); ?></p>
                      </div>
                    </div>
                  </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="swiper-pagination-area"></div>
              </div>
             
              <div class="bg-shape-1">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/pattern-2.svg" alt="">
              </div>
              <div class="bg-shape-2">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/shape/pattern-3.svg" alt="">
              </div>
              <div class="testimonial-quote-shapes" aria-hidden="true">
                <span class="quote-shape quote-shape-1"></span>
                <span class="quote-shape quote-shape-2"></span>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- end: Testimonial Section -->


    <!-- start: Blog Section -->
    <section class="tj-blog-section-2 section-gap">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="sec-heading-wrap">
              <span class="sub-title wow fadeInUp" data-wow-delay=".3s">Read Blogs</span>
              <div class="heading-wrap-content">
                <div class="sec-heading style-2">
                  <h2 class="sec-title text-anim">Strategies and <span>Insights.</span></h2>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".5s">
                  <p class="desc">Developing personalized customer journeys to increase satisfaction and loyalty.</p>
                </div>
                <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".7s">
                  <div class="slider-prev">
                    <span class="anim-icon">
                      <i class="tji-arrow-left"></i>
                      <i class="tji-arrow-left"></i>
                    </span>
                  </div>
                  <div class="slider-next">
                    <span class="anim-icon">
                      <i class="tji-arrow-right"></i>
                      <i class="tji-arrow-right"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="blog-wrapper wow fadeIn" data-wow-delay=".5s">
              <div class="swiper blog-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="blog-item style-2">
                      <div class="blog-thumb">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-4.webp" alt=""></a>
                        <div class="blog-date">
                          <span class="date">28</span>
                          <span class="month">Feb</span>
                        </div>
                      </div>
                      <div class="blog-content">
                        <div class="title-area">
                          <div class="blog-meta">
                            <span class="categories"><a href="blog-details.html">Business</a></span>
                            
                          </div>
                          <h4 class="title"><a href="blog-details.html">Harnessing Digital Transform a Roadmap
                              Businesses.</a></h4>
                        </div>
                        <a class="text-btn" href="blog-details.html">
                          <span class="btn-text"><span>Read More</span></span>
                          <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="blog-item style-2">
                      <div class="blog-thumb">
                        <a href="blog-details.html"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/blog-5.webp" alt=""></a>
                        <div class="blog-date">
                          <span class="date">28</span>
                          <span class="month">Feb</span>
                        </div>
                      </div>
                      <div class="blog-content">
                        <div class="title-area">
                          <div class="blog-meta">
                            <span class="categories"><a href="blog-details.html">Business</a></span>
                          
                          </div>
                          <h4 class="title"><a href="blog-details.html">Mastering Change Management Lessons for
                              Businesses.</a></h4>
                        </div>
                        <a class="text-btn" href="blog-details.html">
                          <span class="btn-text"><span>Read More</span></span>
                          <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination-area"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end: Blog Section -->
    <!-- end: Cta Section -->
 <?php get_footer(); ?>  
