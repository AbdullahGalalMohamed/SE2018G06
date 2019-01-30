<?php 
	include_once("./controllers/common.php");
	include_once('./components/head.php');
	include_once('./models/total.php');
	include_once('./models/student.php');
	$id = safeGet('id');
	Database::connect('school', 'root', '');
	$student = new Student($id);
?>
<h2 class="mt-4">Grades</h2>
<div class="mt-4">Student Id : <?=$student->id?></div>
<div class="mt-4">Student Name : <?=$student->name?></div>
 <table class="table table-striped">
    	<thead>
	    	<tr>
	      
                <th scope="col">course</th>
                <th scope="col">degree</th>
                <th scope="col">max_degree</th>
                <th scope="col">examine_at</th>
                
	      		<th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
		  	<?php	
				$students = total::all($id);
				foreach ($students as $student) {
			?>
    		<tr>
    			
                <td><?=$student->course?></td>
                <td><?=$student->degree?></td>
                <td><?=$student->max_degree?></td>
                <td><?=$student->examine_at?></td>
    			
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>

<?php include_once('./components/tail.php') ?>