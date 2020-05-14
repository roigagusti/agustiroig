<link rel="stylesheet" href="css/modal/remodal.css">

<?php 
?>

<div class="remodal remodal-project" data-remodal-id="projecte" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close close-grey" aria-label="Close"></button>

  <div class="remodal-image" style="background-image: url('../img/architect/llotja.jpg');"></div>
    <h2>La llotja de Pescador</h2>
    <h3>Barcelona</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id felis velit. Donec interdum tellus non nunc 
      rhoncus, vitae mollis nulla consectetur. Pellentesque quis lacus consequat, consectetur velit quis, feugiat est. 
      Proin et mauris at nisl ullamcorper malesuada in id sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
      Vivamus congue congue metus. Nunc vel odio id leo varius elementum. Mauris sit amet condimentum justo. Mauris a 
      elementum ante, sed accumsan risus. Morbi in nisi vel arcu dignissim bibendum in non ipsum. Curabitur libero nibh, 
      condimentum a viverra ac, sollicitudin ac augue. Sed a nisi bibendum, volutpat metus sit amet, venenatis sapien. 
      Morbi accumsan elementum fringilla. Suspendisse auctor sapien sed magna egestas, ac luctus sapien congue. Etiam rhoncus, 
      lorem ut molestie varius, mauris magna tincidunt turpis, quis dictum ex turpis ut odio. Quisque molestie nisl in diam 
      cursus gravida.</p>

    <p>Cras lobortis magna et ex suscipit, ac faucibus enim suscipit. Fusce sagittis, erat vitae bibendum laoreet, lacus 
      enim consectetur sapien, nec posuere purus tortor vel nisi. Sed nec nibh non justo efficitur elementum a a odio. 
      Pellentesque tempus justo non enim vehicula luctus. Maecenas metus nunc, iaculis vel arcu eget, malesuada vulputate 
      ipsum. Suspendisse tempor malesuada egestas. Maecenas sodales commodo elementum. Mauris congue nec enim et elementum.</p>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
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
