<?php 
	include_once('./controllers/common.php');
	include_once('./components/head.php');
	include_once('./models/total.php');
	Database::connect('school', 'root', '');
?>
	<div style="padding: 10px 0px 10px 0px; vertical-align: text-bottom;">
		<span style="font-size: 125%;">Students</span>
	</div>

    <table class="table table-striped">
    	<thead>
	    	<tr>
	      		<th scope="col">ID</th>
	      		<th scope="col">Name</th>
                <th scope="col">course</th>
                <th scope="col">degree</th>
                <th scope="col">max_degree</th>
                <th scope="col">examine_at</th>
                
	      		<th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
		  	<?php	
				$students = total::all(safeGet('keywords'));
				foreach ($students as $student) {
			?>
    		<tr>
    			<td><?=$student->id?></td>
    			<td><?=$student->student?></td>
                <td><?=$student->course?></td>
                <td><?=$student->degree?></td>
                <td><?=$student->max_degree?></td>
                <td><?=$student->examine_at?></td>
    			
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>

<?php include_once('./components/tail.php') ?>