<main>
      <header>
            <h1>Add client</h1>
      </header>
      <div class="form">
      <form action="<?= URL ?>clients/createSave" method="post">
            <div><label>First name</label><input type="text" required name="client_firstname"></div>
            <div><label>Surname</label><input type="text" required name="client_lastname"></div>
            <div><label>Email</label><input type="Email" required name="client_email"></div>
            <div><label>Phonenumber</label><input type="text" required min="10" name="client_phonenumber"></div>
            <div><label>&nbsp;</label><input type="submit" value="submit"></div>
      </form>
      </div>