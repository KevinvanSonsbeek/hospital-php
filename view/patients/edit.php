<?php $species = $required['species'];$clients = $required['clients']; $patient = $required['patient']; $patient = $patient[0];?>
<main>
    <header>
        <h1>Add client</h1>
    </header>
    <div class="form">
        <form action="<?= URL ?>patients/editSave" method="post">
            <div>
                <label>Patients name</label>
                <input type="text" required name="patient_name" value="<?= $patient['patient_name'];?>">
            </div>
            <div>
                <label>Problems</label>
                <textarea required name="patient_status" ><?= $patient['patient_status'];?></textarea>
            </div>
            <div>
                <label>gender</label>
                <input type="radio" name="patient_gender" value="1" <?php if ($patient['patient_gender'] == 1) { echo"checked";}; ?>>
                <label>Male</label>
                <input type="radio" name="patient_gender" value="2" <?php if ($patient['patient_gender'] == 2) { echo"checked";}; ?>>
                <label>Female</label>
                <input type="radio" name="patient_gender" value="3" <?php if ($patient['patient_gender'] == 3) { echo"checked";}; ?>>
                <label>Other</label>
            <div>
                <label>Species</label>
                <select name="species_id">
                    <?php 
                        foreach ($species as $specie) {
                            if ($specie['species_description'] == $patient['species_description']) {
                                echo "<option value='" . $specie['species_id'] . "' selected>" . $specie['species_description'] . "</option>\n";
                            }   else {
                                echo "<option value='" . $specie['species_id'] . "'>" . $specie['species_description'] . "</option>\n";
                            }
                        }


                        
                    ?>
                </select>
            </div>
            <div>
                <label>Owner</label>
                <select name="client_id">
                    <?php 
                        foreach ($clients as $client) {
                            if ($client['client_firstname'] == $patient['client_firstname'] && $client['client_lastname']  == $patient['client_lastname']) {
                               echo "<option value='" . $client['client_id'] . "' selected>" . $client['client_firstname'] . " " . $client['client_lastname'] . "</option>\n";
                            } else {
                                echo "<option value='" . $client['client_id'] . "'>" . $client['client_firstname'] . " " . $client['client_lastname'] . "</option>\n";
                            }
                        }
                    ?>
                </select>
            </div>
            <input type="hidden" name="patient_id" value="<?= $patient['patient_id'] ?>">
            <div><label>&nbsp;</label><input type="submit" value="submit"></div>
        </form>
    </div>