<?php
if(get_language_attributes() == 'lang="ar"'){
  $id_page = get_page_id('services-ar');
}else{
  $id_page = get_page_id('services');
}
$args = array(
  'parent' => $id_page,
  'sort_column' => 'post_date',
  'sort_order' => 'DESC'
);
$pages = get_pages($args);
?>
<section id="what-we-do-section">
  <div class="container">
    <div class="row">

<?php
  $i = 0;
  foreach($pages as $child_page) {
    $page_id    = $child_page->ID;
    $page_link  = get_permalink( $page_id );
    $page_title = $child_page->post_title;
?>
<?php if($i == 0){?>
<div class="col-md-4 mb-5 wow slideInLeft">
<?php } ?>
<?php if($i == 1){?>
<div class="col-md-4 mb-5 wow slideInUp">
<?php } ?>
<?php if($i == 2){?>
<div class="col-md-4 mb-5 wow slideInRight">
<?php } ?>
  <div class="item wow pulse" data-wow-duration="2s" data-wow-iteration="100">
    <a href="<?php echo get_permalink( $page_id ); ?>">
      <?php echo get_post_meta($page_id, 'icon', true); ?>
      <h3><?php echo $page_title ?></h3>
    </a>
    <p><?php echo get_post_meta($page_id, '_yoast_wpseo_metadesc', true); ?></p>
  </div>
</div>
<?php
    $i++;
    if($i == 3){
      break;
    }
  }
?>
    </div>
  </div>
</section>