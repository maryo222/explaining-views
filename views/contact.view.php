<?php
require 'partials/header.php';
?>
<h1> Welcome </h1>
<form>
  <div class="form-group">
    <label for="country">Options</label>
    <select class="form-control" id="web">
    <option value="" selected disabled>Select contact...</option>
      <?php foreach ($contactOptions as $key => $reason): ?>
        <option value="<?=$reason['value'];?>"><?=$reason['name'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
//Footer grabs the closing of HTML page.
require 'partials/footer.php';
?>