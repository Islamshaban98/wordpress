<?php 
 /* Template Name: UX  Audit*/

get_header()
?>
<?php $ux_hero=get_field('ux_hero') ?>
<?php $services_body =get_field('services_body')?>
<?php $grey_section =get_field('grey_section')?>

    <div class="section-9">
      <div class="container-9 w-container">
        <div class="div-block-42">
          <h1 class="heading-10">
          <?php echo $ux_hero['heading']; ?>
          </h1>
          <h1 class="heading-9">
           <?php echo $ux_hero['parag']?>
          </h1>
          <a
            href="<?php echo $ux_hero['inquire_link'] ?>"
            target="_blank"
            class="button-ghost-1 white w-button"
            ><?php echo $ux_hero['inquire_txt'] ?></a
          >
          <div class="learn-more-link white service">
            <div class="div-block-71">
              <a href="#What-is-it" class="link white">Learn more</a>
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
        <div class="div-block-43">
          <div class="div-block-9">
            <div class="div-block-11">
              <img
                src="<?php echo $ux_hero['img'] ?>"
                alt=""
                class="image-15"
              />
            </div>
            <div class="div-block-13">
              <h1 class="heading-12"><?php echo $ux_hero['img_heading']?></h1>
            </div>
            <div class="div-block-12">
              <div class="text-block-4 services-header"><?php echo $ux_hero['time']?></div>
              <div class="w-layout-grid grid-8 service-price">
                <div
                  id="w-node-c5e249b84994-20fe54a9"
                  class="text-block-3 white"
                >
                  <?php echo $ux_hero['cost']?>
                </div>
                <div id="w-node-c5e249b84996-20fe54a9" class="currency">
                <?php echo $ux_hero['currency']?>
                </div>
              </div>
            </div>
          </div>
          <div class="benefits white">
            <div class="div-block-51">
              <img
                src="<?php echo $ux_hero['icon1']?>"
                alt=""
                class="image-11"
              />
              <div class="text-block-2 white">
                <?php echo $ux_hero['parag1'] ?>
              </div>
            </div>
            <div class="div-block-53">
              <img
                src="<?php echo $ux_hero['icon2']?>"
                alt=""
                class="image-11"
              />
              <div class="text-block-2 white"><?php echo $ux_hero['parag2']?></div>
            </div>
            <div class="div-block-52">
              <img
                src="<?php echo $ux_hero['icon3']?>"
                alt=""
                class="image-11"
              />
              <div class="text-block-2 white"><?php echo $ux_hero['parag3'] ?></div>
            </div>
          </div>
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSdWNLGreOmaymIkwdiBzQ_EQjzy8Cd3GXCRHoTx2A00HjjfhQ/viewform?usp=sf_link"
            target="_blank"
            class="button-inquire-mobile white w-button"
            >Inquire</a
          >
        </div>
      </div>
    </div>
    <div id="What-is-it" class="section-10">
      <div class="div-block-65">
        <div class="rich-text-block w-richtext">
          <h2><?php echo $services_body['title1'] ?></h2>
          <p>
           <?php echo $services_body['parag1'] ?>
          </p>
          <h2><?php echo $services_body['title2'] ?></h2>
          <ul role="list">
            <?php echo $services_body['parag2'] ?>
          </ul>
          <h2><?php echo $services_body['title3'] ?></h2>
          <ul role="list">
           <?php echo $services_body['parag3']?>
          </ul>
          <h2><?php echo $services_body['title4'] ?></h2>
          <p>
           <?php echo $services_body['parag4']?>
          </p>
          <ol role="list">
            <?php echo $services_body['parag5']?>
          </ol>
          <p>‍</p>
        </div>
      </div>
    </div>
    <div class="section-26">
      <div class="container-12 w-container">
        <h1 class="heading-15">
        <?php echo $services_body['note']?>
        </h1>
        <a
          id="w-node-42188ec9192c-20fe54a9"
          href=" <?php echo $services_body['inquire_link']?>"
          target="_blank"
          class="button-black inquire w-button"
          > <?php echo $services_body['inquire_txt']?></a
        >
      </div>
    </div>
    <div class="student-testimonial">
      <div class="container-28 w-container">
        <img
          src="<?php echo $grey_section['img']?>"
          width="67"
          alt=""
          class="image-4"
        />
        <p class="paragraph-8">
         <?php echo $grey_section['paragraph']?>
        </p>
        <div class="student-name"><?php echo $grey_section['student']?></div>
        <div class="student-company"><?php echo $grey_section['company']?></div>
      </div>
    </div>
    <?php 
get_footer()
?>