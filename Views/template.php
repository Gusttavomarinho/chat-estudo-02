<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHAT</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <div class="modal_bg" style="display: none;">
      <div class="modal_area">

      </div>
    </div>
    <script>
      var BASE_URL = '<?= BASE_URL; ?>';
    </script>
    <script src="<?= BASE_URL ?>assets/js/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>assets/js/chat.js"></script>
    <script src="<?= BASE_URL ?>assets/js/script.js"></script>
</body>
</html>