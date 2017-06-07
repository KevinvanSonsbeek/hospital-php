<?php $species = $required['species'];$clients = $required['clients'];?>
<main>
      <header>
            <h1>Add client</h1>
      </header>
      <div class="form">
      <form action="<?= URL ?>patients/createSave" method="post">
            <div>
            	<label>Patients name</label>
            	<input type="text" required name="patient_name">
        	</div>
            <div>
            	<label>Problems</label>
            	<textarea required name="patient_status"></textarea>
        	</div>
            <div>
            	<label>gender</label>
        		<input type="radio" name="patient_gender" value="1">
        		<label>Male</label>
				<input type="radio" name="patient_gender" value="2">
        		<label>Female</label>
				<input type="radio" name="patient_gender" value="3">
				<label>Other</label>
            <div>
            	<label>Species</label>
            	<select name="species_id">
            		<option selected>----------</option>
            		<?php 
            			foreach ($species as $specie) {
							echo "<option value='" . $specie['species_id'] . "'>" . $specie['species_description'] . "</option>\n";
						}
					?>
            	</select>
        	</div>
        	<div>
            	<label>Owner</label>
            	<select name="client_id">
            		<option selected>----------</option>
            		<?php 
            			foreach ($clients as $client) {
							echo "<option value='" . $client['client_id'] . "'>" . $client['client_firstname'] . " " . $client['client_lastname'] . "</option>\n";
						}
					?>
            	</select>
        	</div>
            <div><label>&nbsp;</label><input type="submit" value="submit"></div>
      </form>
      </div>