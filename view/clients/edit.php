<main>
      <header>
            <h1>Edit client</h1>
      </header>
      <div class="form">
      <form action="<?= URL ?>clients/editSave" method="post">
            <div><label>First name</label><input type="text" required name="client_firstname" value="<?= $client['client_firstname']?>"></div>
            <div><label>Surname</label><input type="text" required name="client_lastname" value="<?= $client['client_lastname']?>"></div>
            <div><label>Email</label><input type="Email" required name="client_email" value="<?= $client['client_email']?>"></div>
            <div><label>Phonenumber</label><input type="text" required min="10" name="client_phonenumber" value="<?= $client['client_phonenumber']?>"></div>
            <input type="hidden" name="client_id" value="<?= $client['client_id'] ?>">
            <div><label>&nbsp;</label><input type="submit" value="submit"></div>
      </form>
      </div>