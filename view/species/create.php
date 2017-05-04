<main>
      <header>
            <h1>Add species</h1>
      </header>
      <div class="form">
      <form action="<?= URL ?>species/createSave" method="post">
            <div><label>Description</label><input type="text" required name="species_description"></div>
            <div><label>&nbsp;</label><input type="submit" value="submit"></div>
      </form>
      </div>