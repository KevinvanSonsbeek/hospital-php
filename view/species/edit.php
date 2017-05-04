<main>
      <header>
            <h1>Edit species</h1>
      </header>
      <div class="form">
      <form action="<?= URL ?>species/editSave" method="post">
            <div><label>Description</label><input type="text" required name="species_description" value="<?= $species['species_description'] ?>"></div>
            <input type="hidden" name="species_id" value="<?= $species['species_id'] ?>">
            <div><label>&nbsp;</label><input type="submit" value="submit"></div>
      </form>
      </div>

<?= var_dump($species) ?>