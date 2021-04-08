<?php 
/* Template Name: index*/
get_header()
?>
<?php
$hero = get_field('hero');?>
<?php $service_overview =get_field('service_overview') ?>
<?php $student_bar =get_field('student_bar') ?>
<?php $about_me_short =get_field('about_me_short') ?>
<?php $light_banner =get_field('light_banner') ?>
<?php $section =get_field('section') ?>
<?php $grey_banner =get_field('gray_banner') ?>
<?php $students_bar_logos =get_field('students_bar_logos') ?>
<?php $student_testimonial =get_field('student_testimonial') ?>
<?php $call_to_action=get_field('call_to_action') ?>
<?php $nav=get_field('nav') ?>
<?php $block1=get_field('block1') ?>
<?php $block2=get_field('block2') ?>
<?php $block3=get_field('block3') ?>
<?php $block4=get_field('block4') ?>
  
    <div class="section-14">
      <div class="container-29 w-container">
        <img
        src= <?php echo $hero['hero_image']; ?>
          width="400"
          sizes="(max-width: 479px) 83vw, (max-width: 767px) 220px, (max-width: 991px) 300px, 450px"
          alt=""
          class="image-40"
        />
        <div class="div-block-46">
          <div class="div-block-49">
            <h1 class="heading-20 about-title">
            <?php echo $hero['about_title']; ?>
              <!-- Mike Dekker <br />A seasoned Digital Product Designer,<br />Consultant
              &amp; Sprint<br />Facilitator<br /> -->
            </h1>
            <div class="div-block-79">
              <div class="div-block-70 w-clearfix">
                <img
                src=<?php echo $hero['check']; ?>
                  alt=""
                  class="image-9"
                />
                <div class="text-block-2 light whiter">
                <?php echo $hero['check_title']; ?>
                </div>
              </div>
              <div class="div-block-70 w-clearfix">
                <img
                src=<?php echo $hero['image2']; ?>
                alt=""
                  class="image-9"
                />
                <div class="text-block-2 light whiter">
                <?php echo $hero['image2_title']; ?>
                </div>
              </div>
              <div class="div-block-70 w-clearfix">
                <img
                src=<?php echo $hero['imge3']; ?>
                alt=""
                class="image-9"
                />
                <div class="text-block-2 light whiter">
                <?php echo $hero['image3_title']; ?>
                </div>
              </div>
            </div>
            <div class="div-block-50">
              <a
                href="#Service-overview"
                class="button-black inquire button-5 main-cta w-button"
                >
                <?php echo $hero['hero_btn1_title']; ?>
                </a
              ><a
                href="#About-me-short"
                class="button-black inquire button-5 main-cta ghost w-button"
                > <?php echo $hero['hero_btn2_title']; ?></a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-24"></div>
    </div>
    <div class="student-bar">
      <h2 class="heading-8">
      <?php echo $student_bar['title'];?>
      </h2>
      <div class="w-layout-grid client-logo-grid">
        <img
          src=<?php echo $student_bar['logo_img1']?>
          width="192.5"
          alt=""
          class="multiply"
        /><img
        src=<?php echo $student_bar['logo_img2']?>
          width="50"
          alt=""
          class="image-34"
        /><img
          src=<?php echo $student_bar['logo_img3']?>
          width="54"
          alt=""
          class="image-35"
        /><img
          src=<?php echo $student_bar['logo_img4']?>
          width="198.5"
          alt=""
          class="image-36"
        /><img
          src=<?php echo $student_bar['logo_img5']?>
          width="72"
          alt=""
          class="image-37"
        /><img
        src=<?php echo $student_bar['logo_img6']?>
          width="55"
          id="w-node-ddaf2715f46c-2715f463"
          alt=""
          class="multiply"
        /><img
        src=<?php echo $student_bar['logo_img7']?>
          width="99"
          alt=""
          class="image-38"
        /><img
        src=<?php echo $student_bar['logo_img8']?>
          width="86"
          alt=""
          class="image-53"
        />
      </div>
    </div>
    <div id="About-me-short" class="about-me-short">
      <div class="w-container">
        <p class="paragraph-5">
        <?php echo $about_me_short['parag-1'];?>
        </p>
        <p class="paragraph-3">
        <?php echo $about_me_short['parag-2'];?>
        </p>
        <p class="paragraph-3"></p>
      </div>
      <a href="<?php echo $nav['nav_item3_link'];?>" class="button-ghost-1 more-about-me w-button"
        > <?php echo $about_me_short['about-me-txt'];?></a
      >
    </div>
    <div id="Service-overview" class="section-12">
      <div class="w-container">
        <h1 class="heading-3 heading-16">
        <?php echo $service_overview['heading'];?>
        </h1>
        <div class="text-block">
        <?php echo $service_overview['paragraph'];?>
        </div>
      </div>
    </div>
    <div class="section-5">
      <div class="div-block">
        <div class="card-header-2">
          <img
            src="<?php echo $block1['image1']; ?>"
            width="113"
            data-w-id="9d6db2fe-083c-0eaa-ebd3-234312518f0c"
            alt=""
            class="image-6"
          />
          <h3 class="heading-4 white"><?php echo $block1['heading1']; ?></h3>
        </div>
        <div class="div-block-60">
          <p class="paragraph-7">
            <?php echo $block1['parag1'];?>
          </p>
        </div>
        <div class="benefits">
          <div class="div-block-51">
            <img
              src="<?php echo $block1['check1-1']; ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block1['parag1-1'];?></div>
          </div>
          <div class="div-block-53">
            <img
            src="<?php echo $block1['check1-2']; ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block1['parag1-2'];?></div>
          </div>
          <div class="div-block-52">
            <img
              src="<?php echo $block1['check1-3']; ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block1['parag1-3'];?></div>
          </div>
        </div>
        <div class="div-block-55">
          <div class="text-block-4"><?php echo $block1['time1'];?></div>
          <div class="w-layout-grid grid-8">
            <div id="w-node-bbc47c2e4a86-10844cf0" class="text-block-3">
            <?php echo $block1['cost1'];?>
            </div>
            <div id="w-node-bbc47c2e4a88-10844cf0" class="currency"><?php echo $block1['currency1'];?></div>
          </div>
          <a
            href="<?php echo $block1['inquire1_link'];?>"
            target="_blank"
            class="button-service-card w-button"
            ><?php echo $block1['inquire1'];?></a
          >
          <div class="learn-more-link cards">
            <div class="div-block-71">
              <a href="<?php echo $block1['learn_more_link1'];?>" class="link"><?php echo $block1['learn_more'];?></a>
            </div>
            <div class="div-block-73">
              <img
                src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d300a0e85ef61f7215b9bbe_blue_arrow.svg"
                alt=""
                class="image-19"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="div-block">
        <div class="card-header-4">
          <img
            src="<?php echo $block2['image1'] ?>"
            width="172"
            alt=""
            class="image-5"
          />
          <h3 class="heading-4"><?php echo $block2['heading1']; ?></h3>
        </div>
        <div class="div-block-60">
          <p class="paragraph-7">
          <?php echo $block2['parag1']; ?>
          </p>
        </div>
        <div class="benefits">
          <div class="div-block-51">
            <img
              src="<?php echo $block2['check1-1']; ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block2['parag1-1']; ?></div>
          </div>
          <div class="div-block-53">
            <img
              src="<?php echo $block2['check1-1'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block2['parag1-2']; ?></div>
          </div>
          <div class="div-block-52">
            <img
              src="<?php echo $block2['check1-2']; ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block2['parag1-3']; ?></div>
          </div>
        </div>
        <div class="div-block-56">
          <div class="text-block-4"><?php echo $block2['time1']; ?></div>
          <div class="w-layout-grid grid-8">
            <div id="w-node-4beafd830ab8-10844cf0" class="text-block-3">
            <?php echo $block2['cost1']; ?>
            </div>
            <div id="w-node-4beafd830aba-10844cf0" class="currency"><?php echo $block2['currency1']; ?></div>
          </div>
          <a
            href=" <?php echo $block1['inquire1_link'];?>"
            target="_blank"
            class="button-service-card w-button"
            ><?php echo $block2['inquire1'];?></a
          >
          <div class="learn-more-link cards">
            <div class="div-block-71">
              <a  href="<?php echo $block1['learn_more_link2'];?>"  class="link"><?php echo $block2['learn_more'];?></a>
            </div>
            <div class="div-block-73">
              <img
                src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d300a0e85ef61f7215b9bbe_blue_arrow.svg"
                alt=""
                class="image-19"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="div-block">
        <div class="card-header-3">
          <img
            src="<?php echo $block3['image1'] ?>"
            width="161"
            alt=""
            class="image-7"
          />
          <h3 class="heading-4"><?php echo $block3['heading1'] ?></h3>
        </div>
        <div class="div-block-60">
          <p class="paragraph-7">
          <?php echo $block3['parag1'] ?>
          </p>
        </div>
        <div class="benefits">
          <div class="div-block-51">
            <img
              src="<?php echo $block3['check1-1'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block3['parag1-1'] ?></div>
          </div>
          <div class="div-block-53">
            <img
            src="<?php echo $block3['check1-1'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block3['parag1-2'] ?></div>
          </div>
          <div class="div-block-52">
            <img
              src="<?php echo $block3['check1-1'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block3['parag1-3'] ?></div>
          </div>
        </div>
        <div class="div-block-57">
          <div class="text-block-4"><?php echo $block3['time1'] ?></div>
          <div class="w-layout-grid grid-8">
            <div id="w-node-ca52e584c863-10844cf0" class="text-block-3">
            <?php echo $block3['cost1'] ?>
            </div>
            <div id="w-node-ca52e584c865-10844cf0" class="currency"><?php echo $block3['currency1'] ?></div>
          </div>
          <a
            href="<?php echo $block1['inquire1_link'] ?>"
            target="_blank"
            class="button-service-card w-button"
            ><?php echo $block3['inquire1'] ?></a
          >
          <div class="learn-more-link cards">
            <div class="div-block-71">
              <a href="<?php echo $block1['learn_more_link3'] ?>" class="link"
                ><?php echo $block3['learn_more'] ?></a
              >
            </div>
            <div class="div-block-73">
              <img
                src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d300a0e85ef61f7215b9bbe_blue_arrow.svg"
                alt=""
                class="image-19"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="div-block">
        <div class="card-header-1">
          <img
            src=" <?php echo $block4['image1'] ?>"
            width="136"
            alt=""
            class="image-5"
          />
          <h3 class="heading-4">
            <?php echo $block4['heading1'] ?>
          </h3>
        </div>
        <div class="div-block-62">
          <p class="paragraph-7">
            <?php echo $block4['parag1'] ?>
          </p>
        </div>
        <div class="benefits">
          <div class="div-block-51">
            <img
              src="<?php echo $block4['check1-1'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block4['parag1-1'] ?></div>
          </div>
          <div class="div-block-53">
            <img
              src="<?php echo $block4['check1-2'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block4['parag1-2'] ?></div>
          </div>
          <div class="div-block-52">
            <img
              src="<?php echo $block4['check1-3'] ?>"
              alt=""
              class="image-11"
            />
            <div class="text-block-2"><?php echo $block4['parag1-3'] ?></div>
          </div>
        </div>
        <div class="div-block-58">
          <div class="text-block-4"><?php echo $block4['time1']?></div>
          <div class="w-layout-grid grid-8">
            <div id="w-node-dc650cd32a4f-10844cf0" class="text-block-3">
            <?php echo $block4['cost1']?>
            </div>
            <div id="w-node-bf65e81f1275-10844cf0" class="currency"><?php echo $block4['currency1']?></div>
          </div>
          <a
            href="<?php echo $block1['inquire1_link']?>"
            target="_blank"
            class="button-service-card w-button"
            ><?php echo $block1['inquire1']?></a
          >
          <div class="learn-more-link cards">
            <div class="div-block-71">
              <a href="<?php echo $block1['learn_more_link4']?>" class="link"
                ><?php echo $block1['learn_more']?></a
              >
            </div>
            <div class="div-block-73">
              <img
                src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d300a0e85ef61f7215b9bbe_blue_arrow.svg"
                alt=""
                class="image-19"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-22">
      <div class="text-block-12">
      <?php echo $service_overview['text'];?>
      </div>
      <a
        href="https://docs.google.com/forms/d/e/1FAIpQLSdWNLGreOmaymIkwdiBzQ_EQjzy8Cd3GXCRHoTx2A00HjjfhQ/viewform?usp=sf_link"
        target="_blank"
        class="button-ghost-1 pinnk w-button"
        >   <?php echo $service_overview['contact_btn_text'];?></a
      >
    </div>
    <div class="promo-banner-light">
      <div class="container-31 w-container">
        <div class="div-block-34">
          <h1 id="w-node-352db515c807-10844cf0" class="heading-5 light">
          <?php echo $light_banner['heading'];?>
          </h1>
          <div class="text-block-5 light">
          <?php echo $light_banner['parag'];?>
          </div>
          <div class="learn-more-link">
            <div class="div-block-71">
              <a href="<?php echo $light_banner['learn_more_link'] ?>" class="link"><?php echo $light_banner['learn_more_'];?></a>
            </div>
            <div class="div-block-73">
              <img
                src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d300a0e85ef61f7215b9bbe_blue_arrow.svg"
                alt=""
                class="image-19"
              />
            </div>
          </div>
        </div>
        <div class="div-block-69">
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon1'] ?>"
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light">
            <?php echo $light_banner['icon1_txt'] ?>
            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon2'] ?>"
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light">
            <?php echo $light_banner['icon2_txt'] ?>
            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon3'] ?>"
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light">
            <?php echo $light_banner['icon3_txt'] ?>
            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon4'] ?>"
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light">
            <?php echo $light_banner['icon4_txt'] ?>

            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon5'] ?>"
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light">
            <?php echo $light_banner['icon5_txt'] ?>

            </div>
          </div>
        </div>
      </div>
      <div class="learn-more-link hidden">
        <div class="div-block-71">
          <a href="about-me.html" class="link">Learn more</a>
        </div>
        <div class="div-block-73">
          <img
            src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d300a0e85ef61f7215b9bbe_blue_arrow.svg"
            alt=""
            class="image-19"
          />
        </div>
      </div>
    </div>
    <div class="section-4 section-7">
      <div class="container-22 w-container">
        <img
          src=" <?php echo $section['quote_image'];?>"
          width="67"
          alt=""
          class="image-4"
        />
        <p class="paragraph-6">
        <?php echo $section['parag'];?>
        </p>
        <div class="client-name"> <?php echo $section['client_name'];?></div>
        <div class="client-company"> <?php echo $section['client_company'];?> </div>
      </div>
    </div>
    <div class="promo-banner-grey">
      <div class="container-31 w-container">
        <div class="ux-explained">
          <h1 id="w-node-1955b4a77e21-10844cf0" class="heading-5 light white">
          <?php echo $grey_banner['title'];?>
          </h1>
          <div class="text-block-5 light white">
          <?php echo $grey_banner['parag'];?>
          </div>
          <div class="learn-more-link white">
            <div class="div-block-71">
              <a href="   <?php echo $grey_banner['learn_more_link'];?>" class="link white">   <?php echo $grey_banner['learn_more'];?></a>
            </div>
            <div class="div-block-73">
              <img
                src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d75c52d42881ea6edfa6d65_white_link_arrow.svg"
                alt=""
                class="image-19"
              />
            </div>
          </div>
        </div>
        <div class="ux-benefits">
          <div class="div-block-70 w-clearfix">
            <img
                src="<?php echo $light_banner['icon1'] ?>"     
               alt=""
              class="image-9"
            />
            <div class="text-block-2 light whiter">
            <?php echo $grey_banner['txt1'];?>
            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon1'] ?>"              
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light whiter">
            <?php echo $grey_banner['txt2'];?>
            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
              src="<?php echo $light_banner['icon1'] ?>"              
              alt=""
              class="image-9"
            />
            <div class="text-block-2 light whiter">
              
            <?php echo $grey_banner['txt3'];?>

            </div>
          </div>
          <div class="div-block-70 w-clearfix">
            <img
          src="<?php echo $light_banner['icon1'] ?>"    
          alt=""
          class="image-9"
            />
            <div class="text-block-2 light whiter">
            <?php echo $grey_banner['txt4'];?>
            </div>
          </div>
        </div>
      </div>
      <div class="learn-more-link hidden white">
        <div class="div-block-71">
          <a href="about-me.html" class="link white">Learn more</a>
        </div>
        <div class="div-block-73">
          <img
            src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d75c52d42881ea6edfa6d65_white_link_arrow.svg"
            alt=""
            class="image-19"
          />
        </div>
      </div>
    </div>
    <div class="student-bar logos">
      <div class="div-block-35">
        <h2 class="heading-8"><?php echo $students_bar_logos['title']?></h2>
        <div class="w-layout-grid student-company-grid grid-25">
          <img
            src="<?php echo $students_bar_logos['logo1']?>"
            width="192.5"
            id="w-node-41df17735089-10844cf0"
            alt=""
            class="multiply"
          /><img
            src="<?php echo $students_bar_logos['logo3']?>"
            width="120"
            alt=""
            class="image-24"
          /><img
            src="<?php echo $students_bar_logos['logo2']?>"
            width="200"
            id="w-node-41df1773508b-10844cf0"
            alt=""
            class="multiply"
          />
        </div>
      </div>
    </div>
    <div class="student-testimonial">
      <div class="container-28 w-container">
        <img
          src="<?php echo $student_testimonial['quote_image']?>"
          width="67"
          alt=""
          class="image-4"
        />
        <p class="paragraph-8">
        <?php echo $student_testimonial['parag']?>
        </p>
        <div class="student-name">
        <?php echo $student_testimonial['student_name']?>
        </div>
        <div class="student-company"><?php echo $student_testimonial['student_company']?></div>
      </div>
    </div>
    <div class="call-to-action-section">
      <div class="container-12 w-container">
        <h1 class="heading-15">
       <?php echo $call_to_action['heading'] ?>
        </h1>
        <a
          id="w-node-42ddff0a67ec-ff0a67e6"
          href="<?php echo $call_to_action['contact_btn_link'] ?> "
          target="_blank"
          class="button-black inquire w-button"
          ><?php echo $call_to_action['contact_btn_text'] ?></a
        >
      </div>
    </div>
    <?php 
    get_footer();
    ?>
   