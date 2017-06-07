<?php $i=0?>
<h2>Patiënts</h2>
	<table class="sortable">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Gender</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($patients as $patient) { $i = $i + 1;
				?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $patient['patient_name']; ?></td>
				<td><?= $patient['species_description']; ?></td>
				<td><?= $patient['patient_status']; ?></td>
				<td>
					<?php 
						if ($patient['patient_gender'] == "1") { 
							echo "Male"; 
						}	elseif ($patient['patient_gender'] == "2") {
							echo "Female";
						}	else {
							echo "Other";
						}
					?>		
				</td>
				<td><?= $patient['client_firstname'] . " " . $patient['client_lastname']; ?></td>
				<td><a href="<?= URL ?>patients/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
				<td><a href="<?= URL ?>patients/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<p><a href="<?= URL ?>patients/create">Create</a></p>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("table");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>