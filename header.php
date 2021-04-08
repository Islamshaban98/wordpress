<!DOCTYPE html>
<html
  data-wf-domain="www.mikedekker.com"
  data-wf-page="5d2d902bb78ea87c10844cf0"
  data-wf-site="5d2d902bb78ea8d297844cef"
>
<head>
    <meta charset="utf-8" />
    <?php
    wp_head()
    ?>
<?php $nav= get_field('nav');?>
  </head>
  <body class="body">
    <div class="main-nav-section">
      <div
        data-collapse="medium"
        data-animation="default"
        data-duration="400"
        role="banner"
        class="navbar-2 w-nav"
      >
        <div class="w-layout-grid grid-28">
          <a
            id="w-node-17be14fe695d-c4ec3632"
            href="<?php echo $nav['logo_link']; ?>"
            aria-current="page"
            class="w-inline-block w--current"
            >
            <img
              src=<?php echo $nav['logo']; ?>
              width="100"
              alt=""
              class="image-17"
          /></a>
          <nav
            role="navigation"
            id="w-node-848dc4ec3636-c4ec3632"
            class="nav-menu w-nav-menu"
          >
            <div data-hover="1" data-delay="10" class="w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle">
                <div class="icon w-icon-dropdown-toggle"></div>
                <div class="text-block-13"><?php echo $nav['nav_item_1'];?></div>
              </div>
              <nav class="w-dropdown-list">
                <a href= "<?php echo $nav['dropdown_item1_link'];?>" class="dropdown-link w-dropdown-link"
                  ><?php echo $nav['dropdown_item_1'];?></a
                ><a
                href= "<?php echo $nav['dropdown_item2_link'];?>"
                  class="dropdown-link w-dropdown-link"
                  ><?php echo $nav['dropdown_item_2'];?></a
                ><a
                href= "<?php echo $nav['dropdown_item3_link'];?>"
                  class="dropdown-link w-dropdown-link"
                  ><?php echo $nav['dropdown_item_3'];?></a
                ><a
                href= "<?php echo $nav['dropdown_item4_link'];?>"
                  class="dropdown-link w-dropdown-link"
                  ><?php echo $nav['dropdown_item_4'];?></a>
              </nav>
            </div>
            <!-- <?php 
            wp_nav_menu(
              array(
                'theme_location'=> 'top-menu',
                'container_class'=>'nav-link-2',
                'container' =>'a',
              )
            );?> -->
            <a href= "<?php echo $nav['nav_item2_link'];?>" class="nav-link-2 w-nav-link">
            <?php echo $nav['nav_item_2'];?>
            </a>
            <a href="<?php echo $nav['nav_item3_link'];?>" class="nav-link-4 w-nav-link"><?php echo $nav['nav_item_3'];?></a
            ><a href="case-studies.html" class="nav-link-3 w-nav-link"
              >Case studies</a>
            <a href="<?php echo $nav['nav_item_4_link'];?>" class="button w-button"><?php echo $nav['button_title']; ?></a>
          </nav>
          <a
            id="w-node-4a5e0cbb2f40-c4ec3632"
            href="Contact.html"
            class="link-block-2 w-inline-block"
          ></a>
          <div
            id="w-node-848dc4ec363f-c4ec3632"
            class="menu-button w-nav-button"
          >
            <div class="icon-2 w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>