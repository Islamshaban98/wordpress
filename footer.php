<?php $footer = get_field('footer');?>
<div class="footer">
  <div class="container-3 w-container">
    <div class="w-layout-grid grid-22">
      <div id="w-node-62033cfc5d23-3cfc5d20" class="text-block-7">
        <a
          href="<?php echo $footer ['email_link'] ?>"
          class="link-2"
          ><?php echo $footer ['email'] ?></a
        > <?php echo $footer ['phone_number']?>
      </div>
      <a
        id="w-node-290d6da73426-3cfc5d20"
        href="<?php echo $footer ['icon1_link'] ?>"
        target="_blank"
        class="link-block-3 w-inline-block"
        ><img
          src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d2dad41358ee932c01c29f4_Icon Twitter.svg"
          id="Twitter"
          alt=""
          class="image-25" /></a
      ><a
        id="w-node-a6e3044d0edc-3cfc5d20"
        href="<?php echo $footer ['icon2_link'] ?>"
        target="_blank"
        class="link-block-4 w-inline-block"
        ><img
          src="https://uploads-ssl.webflow.com/5d2d902bb78ea8d297844cef/5d2dad41b4a76db23239c06a_Icon Linkedin.svg"
          width="22"
          id="Linkedin"
          alt=""
          class="image-12" /></a
      ><img
        src=" <?php echo $footer['logo'] ?>"
        width="45"
        id="w-node-62033cfc5d2b-3cfc5d20"
        alt=""
        class="image-26"
      />
    </div>
  </div>
</div>
  <?php
  wp_footer()
  ?>
</body>
</html>
