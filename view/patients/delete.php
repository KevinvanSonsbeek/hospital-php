<?php $patient = $patient[0]; ?>
<main>
      <header>
            <h1>Delete Patient</h1>
      </header>
<div class="container" align="center">
	<h3>Are you sure you want to delete this patient?</h3>
      <form action="<?= URL ?>patients/deleteSave/<?= $patient['patient_id'] ?>" method="post">
            <?= $patient['patient_name'];?><br>
            <input type="hidden" name="id" value="<?= $patient['patient_id'] ?>">
            <input type="submit" value="Delete">
      </form>
</div>