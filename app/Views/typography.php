<?= $this->extend("layouts/header"); ?>
<?= $this->section("title") ?>Typography <?= $this->endSection() ?>
<?= $this->section("content"); ?>

      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(<?=base_url() ?>/templates/images/intro-bg-2.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h1 class="font-weight-bold wow fadeInLeft">Typography</h1>
              <p class="intro-description wow fadeInRight">Lots of Customization Options</p>
            </div>
          </div>
        </div>
      </section>
      <!--Base typography -->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-xl-4">
              <ul class="list-md">
                <li>
                  <h1>H1 Heading</h1>
                </li>
                <li>
                  <h2>H2 Heading </h2>
                </li>
                <li>
                  <h3>H3 Heading   </h3>
                </li>
                <li>
                  <h4>H4 Heading </h4>
                </li>
                <li>
                  <h5>H5 Heading</h5>
                </li>
                <li>
                  <h6>H6 Heading </h6>
                </li>
              </ul>
            </div>
            <div class="col-xl-8">
              <ul class="list-xl">
                <li>
                  <h1>H1 Heading</h1>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h2>H2 Heading</h2>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h3>H3 Heading</h3>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h4>H4 Heading</h4>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h5>H5 Heading</h5>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h6>H6 Heading</h6>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--Blockquote-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-10 col-xl-8">
              <h3>Blockquote</h3>
              <!--Quote Primary-->
              <article class="quote-primary">
                <div class="quote-primary-body">
                  <svg class="quote-primary-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="21px" height="15px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve" preserveAspectRatio="none">
                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316 c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37 C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316 c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37 C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                  </svg>
                  <div class="quote-primary-text">
                    <p class="q">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                  </div>
                </div>
                <div class="quote-primary-footer">
                  <p class="heading-5 quote-primary-cite">Dennis Williams</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!--HTML Text Elements-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h3>HTML Text Elements</h3>
              <p class="text-block"><span class="text-bold">Bold text</span>
                <mark>This is a highlighted text</mark><span class="text-strike">This is a strickethrough text</span><span class="text-underline">This is an underlined text.</span><span>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for</span><a class="gray-dark-link" href="#">Link</a><a class="gray-dark-link" href="#">Hover link</a><a class="link-active gray-dark-link" href="#">Press link</a><span>With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</span><span class="tooltip-custom" data-toggle="tooltip" data-placement="top" title="Tooltips">Tooltips</span>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--Unordered List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-8">
              <h3>Unordered List</h3>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests.</p>
              <ul class="list-marked">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ul>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Ordered List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-8">
              <h3>Ordered List</h3>
              <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on your requests.</p>
              <ol class="list-ordered">
                <li>Consulting</li>
                <li>Customer Service</li>
                <li>Innovation</li>
                <li>Management</li>
                <li>Ethics</li>
              </ol>
              <p>We hope that with our services you will receive the most personalized help in purchasing any kind of products you are looking for.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Icon List-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3>Icon List</h3>
          <div class="row row-30">
            <div class="cell-xs-10 col-md-6 col-lg-4">
              <article class="box-minimal">
                <div class="box-minimal-icon fa fa-thumbs-up"></div>
                <h4 class="box-minimal-title">Best Service</h4>
                <div class="box-minimal-text">
                  <p>Our mission is to attract and retain customers by providing Best in Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.</p>
                </div>
              </article>
            </div>
            <div class="cell-xs-10 col-md-6 col-lg-4">
              <article class="box-minimal">
                <div class="box-minimal-icon fa fa-group"></div>
                <h4 class="box-minimal-title">Reputation</h4>
                <div class="box-minimal-text">
                  <p>We have established a strong presence in the industry. Our award-winning services earn a reputation for quality and excellence that few can rival.</p>
                </div>
              </article>
            </div>
            <div class="cell-xs-10 col-md-6 col-lg-4">
              <article class="box-minimal">
                <div class="box-minimal-icon fa fa-lock"></div>
                <h4 class="box-minimal-title">Safety & Security</h4>
                <div class="box-minimal-text">
                  <p>Safety for our employees, customers and the community we work with will always remain our primary focus in all the policies, procedures and programs.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!--Image Centered-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h3>Image Centered</h3>
              <figure class="figure-light offset-top-30"><img class="img-centered" src="<?=base_url() ?>/templates/images/single-service-1-770x414.jpg" alt="" width="770" height="207"/>
                <figcaption>
                  <p>Reliable Services</p>
                </figcaption>
              </figure>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </div>
          </div>
        </div>
      </section>
      <!--Image Left-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h3>Image Left</h3>
              <div class="row row-30">
                <div class="col-md-6"><img src="<?=base_url() ?>/templates/images/single-service-1-770x414.jpg" alt="" width="770" height="207"/>
                </div>
                <div class="col-md-6">
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Image Right-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-8">
              <h3>Image Right</h3>
              <div class="row row-30 flex-md-row-reverse">
                <div class="col-md-6"><img src="<?=base_url() ?>/templates/images/single-service-1-770x414.jpg" alt="" width="770" height="207"/>
                </div>
                <div class="col-md-6">
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section> <?= $this->endSection() ?>