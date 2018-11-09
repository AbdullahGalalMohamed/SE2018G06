<?php 
	include_once("./controllers/common.php");
	include_once('./components/head.php');
	include_once('./models/grade.php');
	$id = safeGet('id');
	Database::connect('school', 'root', '');
	$student = new grade($id);
?>

    <h2 class="mt-4"><?=($id)?"Edit":"Add"?> grade</h2>

    <form action="controllers/savegrade.php" method="post">
    	<input type="hidden" name="id" value="<?=$student->get('id')?>">
		<div class="card">
        
			<div class="card-body">
            
				<div class="form-group row gutters">
                
					<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    
					<div class="col-sm-10">
                    
						
                        <input class="form-control" type="text" name="student_id" value="<?=$student->get('student_id')?>" required>
                        <input class="form-control" type="text" name="course_id" value="<?=$student->get('course_id')?>" required>
                        <input class="form-control" type="text" name="degree" value="<?=$student->get('degree')?>" required>
                        <input class="form-control" type="text" name="examine_at" value="<?=$student->get('examine_at')?>" required>
                        
					</div>
                    
				</div>
                
		    	<div class="form-group">
		    		<button class="button float-right" type="submit">Add</button>
		    	</div>
		    </div>
		</div>
    </form>

<?php include_once('./components/tail.php') ?>