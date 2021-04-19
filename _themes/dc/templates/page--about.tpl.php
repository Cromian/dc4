<section class="subheader intro-banner content">
  <div class="container">
    <h1 class="title"><?php echo $page_data['title']; ?></h1>
    <?php if (!empty($page_data['meta']['featured_image'])) { ?>
      <div class="featured-image" style="background-image: url('<?php echo $page_data['meta']['featured_image']; ?>');"></div>
    <?php } ?>
  </div>
</section>

<?php if (!empty($page_data['meta']['featured_image'])) { ?>
  <section class="page-body showcase">
<?php } else { ?>
  <section class="page-body">
<?php } ?>

  <div class="container">
  <h2 class="arrow-text"><span>Our Story</span></h2>
    <div class="content-well">
      <?php echo $page_data['body']; ?>
    </div>
    <div class="doodle-scribble"></div>
  </div>
</section>