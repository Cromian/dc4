<!DOCTYPE html>
<html lang="en">
<head>
<title><?php render_siteTitle($page_data); ?></title>
  <meta name="description" content="<?php render_siteDescription($page_data); ?>">
  <?php render_themeCSS(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,700;1,400&family=Architects+Daughter&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
      <div id="menu-icon" onclick="slideToggle()">☰</div>
      <nav id="menu-well"><?php render_siteMenu(); ?></nav>
    </div>
  </div>
</header>

<main>
  <!-- This line renders a page overide i.e. page--front.tpl.php -->
  <?php if (isset($page_content)) { include($page_content); } else { ?>

    <!-- This line renders the content template, i.e. a post or page. -->
    <?php if (isset($page_data['template_type']) && $page_data['template_type'] == 'content') { ?>
        <section>
          <div class="container"><?php render_templateContent($page_data); ?></div>
        </section>
      <?php } ?>

      <!-- This line renders a list page, i.e. blog, tag or category -->
      <?php if (isset($page_data['template_type']) && $page_data['template_type'] == 'list') { ?>
        <section>
          <div class="container"><?php  render_templateList($page_data); ?></div>
        </section>
      <?php } ?>

      <!-- This renders the 404 page. Customize as you see fit. -->
      <?php if (isset($page_data['status'])) { if ($page_data['status'] == '404') {?>
        <section>
        <div class="e404">
          <h1>Yikes!</h1>
          <p>It looks like something terrible has happened, and this page no longer exists.</p>
          <a href="#" class="button">Go Back</a>
        </div>
        </section>
      <?php } } ?>
  
    <?php } ?>
</main>

<div class="container">
  <div id="letter" onclick="emailSignup();">Read Me!</div>
</div>

<footer class="alt-section" id="contact">
  <div class="container">
    <div class="two-col">
      <div>
        <div class="banner-text">
          <h2><span class="subtitle">How Can</span> We Help You?</h2>
          <p>Our team has exceptional proficiency in building one-of-a-kind websites, leveraging the latest web technologies, design principles, and product strategies. Let us know how we can do the same for you!</p>
          <a href="mailto:hello@digitalconfection.com?Subject=Hello%20From%20Website" class="button">Lets Connect</a>
          <div class="social-links">
            <a href="https://twitter.com/digiconfec" aria-label="Twitter Link"><i class="fab fa-twitter"></i></a> <a href="https://github.com/digitalconfection" aria-label="GitHub Link"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div>
        <a href="https://ollyjolly.com/product/better-together-gin-tonic-t-shirt/" target="_blank" aria-label="OllyJolly T-Shirt Image Link" class="doodle-me"></a>
      </div>
    </div>
    <div class="msg center">Have a fabulous <span id="foot-day">day</span>!</div>
    <div class="cc center">
      ©<?php echo date('Y') . ' '?><a href="<?php render_baseUrl(); ?>">Digital Confection, LLC</a>.<br>
      Proudly built with <a href="https://typetote.com" href="_blank">TypeTote</a>, our straightforward CMS!
    </div>
  </div>
</footer>

<?php include('_email.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php render_themeJS(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42051595-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42051595-7');
</script>
</body>
</html>