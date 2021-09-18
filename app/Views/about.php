<?= $this->extend("layouts/header"); ?>
<?= $this->section("title") ?>About <?= $this->endSection() ?>
<?= $this->section("content"); ?>

      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(images/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h1 class="font-weight-bold wow fadeInLeft">About Us</h1>
              <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
          </div>
        </div>
      </section>
      <!-- About page about section-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-40 justify-content-center">
            <div class="col-lg-6 col-12">
              <div class="offset-top-45 offset-lg-right-45">
                <div class="section-name wow fadeInRight" data-wow-delay=".2s">About us</div>
                <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">A Few Words<span class="text-primary"> about us</span></h3>
                <p class="font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum nulla ac tincidunt malesuada. Sed volutpat semper elit quis pharetra. Etiam sodales a sem vitae fermentum.</p>
                <p class="wow fadeInUp" data-wow-delay=".4s">Sapien eget mi proin sed libero enim sed faucibus turpis. Placerat in egestas erat imperdiet sed euismod nisi. Vulputate eu scelerisque felis imperdiet. Lorem donec massa sapien faucibus. Volutpat diam.</p>
                <p class="wow fadeInUp" data-wow-delay=".4s">Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Nullam non nisi est sit amet facilisis magna etiam. Nec feugiat in fermentum posuere urna nec.</p>
                <div class="offset-top-20">
                  <!--Linear progress bar-->
                  <article class="progress-linear">
                    <div class="progress-header progress-header-simple">
                      <p>Management</p><span class="progress-value">85</span>
                    </div>
                    <div class="progress-bar-linear-wrap">
                      <div class="progress-bar-linear"></div>
                    </div>
                  </article>
                  <!--Linear progress bar-->
                  <article class="progress-linear">
                    <div class="progress-header progress-header-simple">
                      <p>Marketing</p><span class="progress-value">45</span>
                    </div>
                    <div class="progress-bar-linear-wrap">
                      <div class="progress-bar-linear"></div>
                    </div>
                  </article>
                  <!--Linear progress bar-->
                  <article class="progress-linear">
                    <div class="progress-header progress-header-simple">
                      <p>Analysis</p><span class="progress-value">90</span>
                    </div>
                    <div class="progress-bar-linear-wrap">
                      <div class="progress-bar-linear"></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-10 col-12">
              <div class="block-decorate-img wow fadeInLeft" data-wow-delay=".2s"><img src="<?=base_url() ?>/templates/images/about-1-570x703.jpg" alt="" width="570" height="351"/>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our team-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md col-12 text-center">
              <div class="section-name wow fadeInRight" data-wow-delay=".2s">People Behind Our Success</div>
              <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Meet Our<span class="text-primary"> Team</span></h3>
              <p class="block-675">Mi proin sed libero enim sed faucibus. Metus dictum at tempor commodo. Viverra justo nec ultrices dui sapien eget mi. Eget felis eget nunc lobortis.</p>
            </div>
          </div>
          <div class="row row-50 justify-content-center">
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="<?=base_url() ?>/templates/images/team-classic-1-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">William Johnson</h4><span class="d-block">CEO, Founder</span>
                  <p>Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et pharetra pharetra massa massa ultricies.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="<?=base_url() ?>/templates/images/team-classic-2-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Jane McMillan</h4><span class="d-block">Business Advisor</span>
                  <p>Ut morbi tincidunt augue interdum velit. Sed euismod nisi porta lorem nisl rhoncus mattis rhoncus urna sed.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInRight" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="<?=base_url() ?>/templates/images/team-classic-3-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Robert Smith</h4><span class="d-block">Marketing Manager</span>
                  <p>Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. Euismod lacinia at quis risus sed vulputate.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Brands-->
      <section class="section section-md bg-gray-lighten">
        <div class="container">
          <div class="row">
            <!-- Owl Carousel-->
            <div class="owl-carousel text-center owl-brand" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="5" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false" data-autoplay="true">
              <div class="item"><img src="<?=base_url() ?>/templates/images/brand-1-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="<?=base_url() ?>/templates/images/brand-2-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="<?=base_url() ?>/templates/images/brand-3-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="<?=base_url() ?>/templates/images/brand-4-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="<?=base_url() ?>/templates/images/brand-5-200x48.png" alt="" width="200" height="24"/>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Cta section-->
      <section class="section section-md" style="background:url(<?=base_url() ?>/templates/images/bg-image-4-1700x394.jpg) no-repeat; background-size: cover;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-12 text-center"><span class="text-white d-block cta-big-text font-weight-medium">Still Have Some Questions Left?</span>
              <h2 class="text-white"><span class="d-block">Get in Touch with Us:<a class="underline-link" href="tel:#"> 855-456-7634</a></span></h2>
              <p class="text-white">Feel free to contact our team to learn more about the services provided by us and multiple offers for Your business!</p>
              <a class="button-circle button-default-outline button button-lg button-width-210" href="/contacts">contact us</a>
            </div>
          </div>
        </div>
      </section> <?= $this->endSection() ?>