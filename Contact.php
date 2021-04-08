<?php 
 /* Template Name: Contact*/
get_header()
?>
<?php $container= get_field('container');?>
<?php $footer = get_field('footer');?>

    <div class="section-15">
      <div class="container-27 w-container">
        <div class="div-block-45"><div class="text-block-15"><?php echo $container['contact_txt'] ?></div></div>
        <div class="div-block-44">
          <h1 class="heading-25 contact-title">
            <?php echo $container['heading'] ?>
          </h1>
          <div class="text-block-14">
            <?php echo $container['parag']?>
            <a href="mailto:mike@mikedekker.com?subject=UX%20Inquiry"
              class="link-3"
              ><?php echo $footer ['email'] ?></a
            ><?php echo $footer ['phone_number']?>
          </div>
          <div class="div-block-31">
            <img
              src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d2dad41358ee932c01c29f4_Icon Twitter.svg"
              alt=""
              class="image-46"
            /><img
              src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d2dad41b4a76db23239c06a_Icon Linkedin.svg"
              alt=""
            />
          </div>
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSdWNLGreOmaymIkwdiBzQ_EQjzy8Cd3GXCRHoTx2A00HjjfhQ/viewform?usp=sf_link"
            target="_blank"
            class="button-black button-4 w-button"
            ><?php echo $container['button_txt'] ?></a
          >
        </div>
      </div>
    </div>
    <?php 
get_footer()
?>