<main>
      <header>
            <h1>Delete Species</h1>
      </header>
<div class="container" align="center">
	<h3>Are you sure you want to delete this species?</h3>
      <form action="<?= URL ?>species/deleteSave/<?= $species['species_id'] ?>" method="post">
            <?= $species['species_description'] ?><br>
            <input type="hidden" name="id" value="<?= $species['species_id'] ?>">
            <input type="submit" value="Delete">
      </form>
</div>