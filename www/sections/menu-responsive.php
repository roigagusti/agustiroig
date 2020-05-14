<link rel="stylesheet" href="css/modal/remodal.css">

<div class="remodal remodal-menu-responsive" data-remodal-id="menu-responsive" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close close-white" aria-label="Close"></button>
  <!-- Menu responsive -->
  <ul class="menu-responsive" align="center">
    <li><a href="architect">ARCHITECT</a></li>
    <li><a href="entrepreneur.php">ENTREPRENEUR</a></li>
    <li><a href="developer.php">DEVELOPER</a></li>
    <li><a href="about.php">ABOUT</a></li>
    <!--<li><a href="blog.php">BLOG</a></li>-->
  </ul>
</div>

<script src="js/modal/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });
</script>

