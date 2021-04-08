    <?php
   /* Template Name: How I Work*/
    get_header()
    ?>
    <?php $body = get_field('body');?>
    <?php $service_at_glance = get_field('service_at_glance');?>
    <?php $how_i_work_hero = get_field('how_i_work_hero')?>
    <?php $grey_section = get_field('grey_section')?>
    <?php $tool_box = get_field('tool_box')?>
    <div class="section-13">
      <div class="div-block-74">
        <img
         src="<?php echo $how_i_work_hero['image'] ?>"
          alt=""
          class="image-55"
        />
        <h1 class="heading-sub-black how-i-work-header">
          <?php echo $how_i_work_hero['heading'] ?>
        </h1>
      </div>
    </div>
    <div class="section-10">
      <div class="div-block-17"></div>
      <div class="div-block-41">
        <div class="how-i-work-text how-i-work-image w-richtext">
          <h2><?php echo $how_i_work_hero['heading2'] ?></h2>
          <p>
            <?php echo $how_i_work_hero['parag1'] ?>
          </p>
          <p>
          <?php echo $how_i_work_hero['parag2'] ?>

          </p>
          <p>‍</p>
          <figure
            style="max-width: 1031pxpx"
            id="w-node-24afd1d6454d-f509694b"
            class="w-richtext-align-fullwidth w-richtext-figure-type-image"
          >
            <div>
              <img
                src="<?php echo $how_i_work_hero['figure'] ?>"
                alt=""
              />
            </div>
          </figure>
          <p>‍</p>
          <h2><?php echo $how_i_work_hero['heading3'] ?></h2>
          <p>
          <?php echo $how_i_work_hero['parag3']?>
          </p>
          <p>‍</p>
          <figure
            style="max-width: 471pxpx"
            id="w-node-e16fe25228c3-f509694b"
            class="w-richtext-align-fullwidth w-richtext-figure-type-image"
          >
            <div>
              <img
                src="<?php echo $how_i_work_hero['figure2'] ?>"
                alt=""
              />
            </div>
          </figure>
          <p>
          <?php echo $how_i_work_hero['parag4'] ?>
          </p>
          <p>‍</p>
        </div>
      </div>
    </div>
    <div class="section-8">
      <div class="container-26 w-container">
        <div class="text-block-9"><?php echo $service_at_glance['title'] ?></div>
        <div class="w-layout-grid grid-26">
          <div id="w-node-bfa0e4a9cbd6-50c51da0" class="div-block-36">
            <div class="div-block-38">
              <img
                src="<?php echo $service_at_glance['img1'] ?>"
                width="57"
                alt=""
                class="image-29"
              />
            </div>
            <div class="text-block-11"><?php echo $service_at_glance['heading1']?></div>
            <p class="_10 service-cell-1">
            <?php echo $service_at_glance['parag1'] ?>
            </p>
          </div>
          <div id="w-node-b7eb95f9be9c-50c51da0" class="div-block-36">
            <div class="div-block-39">
              <img
                src="<?php echo $service_at_glance['img2'] ?>"
                width="62"
                alt=""
                class="image-28"
              />
            </div>
            <div class="text-block-11"><?php echo $service_at_glance['heading2'] ?></div>
            <p class="_10 service-cell-1">
            <?php echo $service_at_glance['parag2'] ?>
            </p>
          </div>
          <div id="w-node-fbe09432f47c-50c51da0" class="div-block-36">
            <div class="div-block-40">
              <img
                src="<?php echo $service_at_glance['img3'] ?>"
                width="81"
                alt=""
                class="image-27"
              />
            </div>
            <div class="text-block-11"><?php echo $service_at_glance['heading3'] ?></div>
            <p class="_10 service-cell-1">
              <?php echo $service_at_glance['parag3'] ?>
            </p>
          </div>
          <div id="w-node-61cbf56fe9f2-50c51da0" class="div-block-36">
            <div class="div-block-37">
              <img
                src="<?php echo $service_at_glance['img4'] ?>"
                width="52"
                alt=""
                class="image-13"
              />
            </div>
            <div class="text-block-11"><?php echo $service_at_glance['heading4'] ?></div>
            <p class="_10 service-cell-1">
            <?php echo $service_at_glance['parag4'] ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-18">
      <div class="w-container">
        <div class="process-driven-title">
          <?php echo $grey_section['title'] ?>
        </div>
        <img
          src="<?php echo $grey_section['workflow_img']?>"
          width="800"
          alt=""
          class="image-39"
        />
      </div>
    </div>
    <div class="section-24">
      <h1 class="tools-i-use"><?php echo $tool_box['title']?></h1>
      <div class="w-container">
        <div class="w-layout-grid grid-23">
          <img
            src="<?php echo $tool_box['img1'] ?>"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbdf3ec74abf98b6fc7ec8_Figma-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbdf3ec74abf98b6fc7ec8_Figma.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-91f2297b1533-f509694b"
            alt=""
          /><img
            src="<?php echo $tool_box['img2'] ?>"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbdfe7fe51b62ee0b5b8cc_Axure-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbdfe7fe51b62ee0b5b8cc_Axure.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-1856a24ca690-f509694b"
            alt=""
          /><img
            src="<?php echo $tool_box['img3'] ?>"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbdffc741bd77730950219_Invision-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbdffc741bd77730950219_Invision.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-0ddc1d5263de-f509694b"
            alt=""
          /><img
            src="<?php echo $tool_box['img4'] ?>"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbe011741bd74abf9503cf_Whimsical-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbe011741bd74abf9503cf_Whimsical.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-e6520bf7ca3f-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe18d741bd71bed950be4_Sketch.png"
            width="255"
            id="w-node-dd6ec165e5a9-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe1724dcbb35126d807db_OW.png"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbe1724dcbb35126d807db_OW-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbe1724dcbb35126d807db_OW.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-792791a22d05-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe11da7706933ed692ccb_Adobe.png"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbe11da7706933ed692ccb_Adobe-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcbe11da7706933ed692ccb_Adobe.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-10fdbc8ef082-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe109fe51b64c72b5bcd3_Miro.png"
            width="255"
            id="w-node-3c11b810eae4-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe1ada770698f10693b4e_User%20testing.png"
            width="255"
            id="w-node-883023ac7878-f509694b"
            alt=""
          /><img
            src="./assets/5dcc9d998be617274297e4af_Maze.png"
            width="255"
            srcset="
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcc9d998be617274297e4af_Maze-p-500.png 500w,
              https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5dcc9d998be617274297e4af_Maze.png       510w
            "
            sizes="(max-width: 479px) 83vw, 255px"
            id="w-node-e863240e88b5-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe1cfa7706916c7693fb1_Pop.png"
            width="255"
            id="w-node-0cc3eac36ab9-f509694b"
            alt=""
          /><img
            src="./assets/5dcbe1db4dcbb3c39fd80af5_Principle.png"
            width="255"
            id="w-node-3e49c3665e9f-f509694b"
            alt=""
          />
        </div>
      </div>
    </div>
    <div class="call-to-action-section">
      <div class="container-12 w-container">
        <h1 class="heading-15">
         <?php echo $tool_box['contact_txt'] ?>
        </h1>
        <a
          id="w-node-b365ccb8cd47-f509694b"
          href="<?php echo $tool_box['contact_btn_link'] ?>"
          target="_blank"
          class="button-black inquire w-button"
          ><?php echo $tool_box['contact_btn_txt'] ?></a
        >
      </div>
    </div>
    <?php 
get_footer();
?>