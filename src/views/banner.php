<!DOCTYPE html>
<html>
<head>
  <title>Conduciendo - Banners</title>

  <link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="assets/scripts/prototype.js"></script>
</head>
  <body>
    <?php
      include(__DIR__.'/../../header.php');
    ?>
    <div class="container">
      <div class="content">
        <h1>Banners</h1>
        <div class="options">
          <form class="form" action="/banner" method="post">
            <label>Seleccionar posici&oacute;n:&nbsp;</label>
            <select name="position">
              <?php
                if ($positions) {
                  foreach ($positions as $position) {
                  ?> <option value="<?= $position['id'] ?>"><?= $position['nombre'] ?></option>
                  <?php }
                }
              ?>
            </select>
            <input type="submit" value="seleccionar">
          </form>
      <?php
        if ($banner) {
      ?>
          <a class="pull-right" href="/banner/edit?id=<?= $banner->getId() ?>">Editar</a>
      <?php
        }
      ?>
        </div>
        <div class="grid">
          <?php
            if ($banner) {
          ?>
            <div class="banner">
              <span class="name"> <?= $banner->getName() ?> </span>
              <span class="source"> <?= $banner->getSource() ?> </span>
              <span class="position"> <?= $banner->getPositionName() ?> </span>
              <span class="type"> <?= $banner->getTypeName() ?> </span>
            </div>
          <?php
            } else {
          ?>
              <form class="form" action="/banner" method="post" enctype="multipart/form-data">
                <div>
                  <select name="position">
                    <?php
                      foreach ($positions as $position) {
                        ?> <option value="<?= $position['id'] ?>"><?= $position['nombre'] ?></option>
                      <?php }
                    ?>
                  </select>
                </div>
                <div>
                  <?php
                    foreach ($types as $type) {
                      ?> <input type="radio" name="type" value="<?= $type['id']?>"> &nbsp;<?= $type['nombre'] ?>
                    <?php }
                  ?>
                </div>
                <div>
                  <label for="file">Files to upload:</label>
                  <input type="file" id="file" name="file" multiple="multiple" />
                </div>
                <input type="submit" value="Send">
              </form>
        <?php
            } ?>
        </div>
      </div>
    </div>
  </body>
</html>
