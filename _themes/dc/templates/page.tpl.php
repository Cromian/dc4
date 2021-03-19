<!DOCTYPE html>
<html lang="en">
<head>
<title><?php render_siteTitle($page_data); ?></title>
  <meta name="description" content="<?php render_siteDescription($page_data); ?>">
  <?php render_themeCSS(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,700;1,400&family=Architects+Daughter&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <?php render_templateMetaHead($page_data); ?>
</head>
<body>

<?php #  Renders the site banner. ?>
<?php render_siteBanner()?>

<header>
  <div class="container nav-well">
    <div>
      <a href="<?php render_baseUrl(); ?>" class="logo" aria-label="Logo"></a>
    </div>
    <div>
      <!-- <div id="menu-icon" onclick="slideToggle()">☰</div> -->
      <nav id="menu-well"><?php render_siteMenu(); ?></nav>
    </div>
  </div>
</header>

<main>
  <!-- This line renders a page overide i.e. page--front.tpl.php -->
  <?php if (isset($page_content)) { include($page_content); } ?>

  <div class="container">
    <!-- This line renders the content template, i.e. a post or page. -->
    <?php if (isset($page_data['template_type']) && $page_data['template_type'] == 'content') { ?>
      <?php render_templateContent($page_data); ?>
    <?php } ?>

    <!-- This line renders a list page, i.e. blog, tag or category -->
    <?php if (isset($page_data['template_type']) && $page_data['template_type'] == 'list') { ?>
      <?php  render_templateList($page_data); ?>
    <?php } ?>

    <!-- This renders the 404 page. Customize as you see fit. -->
    <?php if (isset($page_data['status'])) { if ($page_data['status'] == '404') {?>
      <h1>Gratz. You Broke it!</h1>
      <p>It looks like something terrible has happened, and this page no longer exists.</p>
    <?php } } ?>
  </div>
</main>

<footer class="alt-section" id="contact">
  <div class="container">
    <div class="two-col">
      <div>
        <div class="banner-text">
          <h2><span class="subtitle">How Can</span> We Help You?</h2>
          <p>Our team has exceptional proficiency in building one-of-a-kind websites, leveraging the latest web technologies, design principles, and product strategies. Let us know how we can do the same for you!</p>
          <a href="mailto:hello@digitalconfection.com?Subject=Hello%20From%20Website" class="button">Lets Connect</a>
        </div>
      </div>
      <div>
        <div class="doodle-me"></div>
      </div>
    </div>
    <div class="msg center">Have a fabulous <span id="foot-day">day</span>!</div>
    <div class="cc center">
      ©<?php echo date('Y') . ' '?><a href="<?php render_baseUrl(); ?>">Digital Confection, LLC</a>.
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php render_themeJS(); ?>
</body>
</html>