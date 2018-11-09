<?php 
	include_once('./controllers/common.php');
	include_once('./components/gradehead.php');
	include_once('./models/grade.php');
	Database::connect('school', 'root', '');
?>
<html>
<body>
	<div style="padding: 10px 0px 10px 0px; vertical-align: text-bottom;">
		<span style="font-size: 125%;">Grades</span>
		<button class="button float-right edit_student" id="0">Add grade</button>
	</div>

    <table class="table table-striped">
    	<thead>
	    	<tr>
	      		<th scope="col">ID</th>
	      		<th scope="col">student Id</th>
                <th scope="col">course Id</th>
                <th scope="col">dgree</th>
                <th scope="col">Exame date</th>
	      		<th scope="col"></th>
	    	</tr>
	  	</thead>
        
	  	<tbody>
        
		  	<?php	
				$students = grade::all(safeGet('keywords'));
				foreach ($students as $student) {
			?>
            <tr>
    			<td><?=$student->id?></td>
    			<td><?=$student->student_id?></td>
                <td><?=$student->course_id?></td>
                <td><?=$student->degree?></td>
                <td><?=$student->examine_at?></td>
    			<td>
    				<button class="button edit_student" id="<?=$student->id?>">Edit</button>&nbsp;
    				<button class="button delete_student" id="<?=$student->id?>">Delete</button>
				</td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>

<?php include_once('./components/tail.php') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.edit_student').click(function(event) {
			window.location.href = "editgrade.php?id="+$(this).attr('id');
		});
	
		$('.delete_student').click(function(){
			var anchor = $(this);
			$.ajax({
				url: './controllers/deletegrade.php',
				type: 'GET',
				dataType: 'json',
				data: {id: anchor.attr('id')},
			})
			.done(function(reponse) {
				if(reponse.status==1) {
					anchor.closest('tr').fadeOut('slow', function() {
						$(this).remove();
					});
				}
			})
			.fail(function() {
				alert("Connection error.");
			})
		});
	});
</script>