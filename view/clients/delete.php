<main>
      <header>
            <h1>Delete Species</h1>
      </header>
<div class="container" align="center">
	<h3>Are you sure you want to delete this client?</h3>
      <form action="<?= URL ?>clients/deleteSave/<?= $client['client_id'] ?>" method="post">
            <?= $client['client_firstname'] . " " . $client['client_lastname'] ?><br>
            <input type="hidden" name="id" value="<?= $client['client_id'] ?>">
            <input type="submit" value="Delete">
      </form>
</div>