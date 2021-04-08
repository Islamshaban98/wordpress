<?php 
 /* Template Name: About Me*/
get_header()
?>
<?php
$body = get_field('body');?>
<?php $parallax =get_field('parallax')?>
    <div class="section-23">
      <div class="div-block-80">
        <img
          src="<?php echo $body['about_me_header'] ?>"
          width="2678"
          alt=""
          class="image-54"
        />
        <div class="learn-more-link white service">
          <div class="div-block-71">
            <a href="#Designer-profile" class="link white">Learn more</a>
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
    </div>
    <div id="Designer-profile" class="section-19">
      <div class="div-block-17 profile">
        <h1 class="heading-19"><?php echo $body['heading1'] ?></h1>
        <p class="paragraph-10">
         <?php echo $body['parag1'] ?>
        </p>
        <h1 class="heading-19"><?php echo $body['heading2'] ?></h1>
        <div class="rich-text-block-2 w-richtext">
          <ul role="list">
            <li>
             <?php echo $body['list1'] ?>
            </li>
          </ul>
          <ul role="list">
            <li>
              <?php echo $body['list2'] ?>
            </li>
          </ul>
          <ul role="list">
            <li>
            <?php echo $body['list3'] ?>
            </li>
            <li>
            <?php echo $body['list4'] ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div  class="parallax">
      <div class="container-34 w-container">
        <h1 class="heading-27"><?php echo $parallax['heading']?></h1>
        <img
          src="<?php echo get_theme_file_uri("./assets/5e16867ab2a3c878223dc89e_cubes.jpg")?>"
          srcset="
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e16867ab2a3c878223dc89e_cubes-p-500.jpeg 500w,
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e16867ab2a3c878223dc89e_cubes.jpg        530w
          "
          sizes="(max-width: 479px) 120px, 250px"
          alt=""
          class="image-56"
        /><img
          src="<?php echo get_theme_file_uri("./assets/5dafdebb5103fcb3cfeb4174_F210D292-93B6-4E55-BB9E-C27645E4F251.jpg")?>"
          width="302"
          srcset="
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dafdebb5103fcb3cfeb4174_F210D292-93B6-4E55-BB9E-C27645E4F251-p-500.jpeg 500w,
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dafdebb5103fcb3cfeb4174_F210D292-93B6-4E55-BB9E-C27645E4F251.JPG        720w
          "
          sizes="(max-width: 479px) 100vw, (max-width: 767px) 150px, (max-width: 991px) 200px, 400px"
          alt=""
          class="image-51"
        /><img
          src="<?php echo get_theme_file_uri("./assets/5e1686163c053f545980e922_Rotterdam.jpg")?>"
          width="442"
          srcset="
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e1686163c053f545980e922_Rotterdam-p-500.jpeg   500w,
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e1686163c053f545980e922_Rotterdam-p-800.jpeg   800w,
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e1686163c053f545980e922_Rotterdam-p-1080.jpeg 1080w,
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e1686163c053f545980e922_Rotterdam.jpg         1592w
          "
          sizes="(max-width: 479px) 100vw, (max-width: 991px) 400px, 800px"
          alt=""
          class="image-52"
        /><img
          src=" <?php echo get_theme_file_uri("./assets/5e16863eaa1adb5949a8d77d_Kayak.jpg")?>"
          width="236"
          srcset="
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e16863eaa1adb5949a8d77d_Kayak-p-500.jpeg 500w,
            https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5e16863eaa1adb5949a8d77d_Kayak.jpg        750w
          "
          sizes="(max-width: 479px) 100vw, (max-width: 991px) 220px, 300px"
          alt=""
          class="image-50"
        />
      </div>
    </div>
    <div class="section-19">
      <div class="div-block-17">
        <h1 class="heading-19"><?php echo $body['heading3'] ?></h1>
        <p class="paragraph-10">
        <?php echo $body['parag2']?>
        </p>
        <h1 class="heading-19"><?php echo $body['heading4'] ?></h1>
        <p class="paragraph-10">
        <?php echo $body['parag3'] ?>
        </p>
      </div>
    </div>
    <div class="call-to-action-section">
      <div class="container-12 w-container">
        <h1 class="heading-15">
         <?php echo $body ['contact_txt']?>
        </h1>
        <a
          id="w-node-42ddff0a67ec-ff0a67e6"
          href="<?php echo $body['contact_btn_link'] ?>"
          target="_blank"
          class="button-black inquire w-button"
          ><?php echo $body ['contact_btn_txt'] ?></a
        >
      </div>
    </div>
    <?php 
    get_footer()
    ?>