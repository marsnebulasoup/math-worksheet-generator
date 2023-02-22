<?php include "../include/layout.php"; ?>

<link rel="stylesheet" href="../include/mful.css"></link>

    <div style="margin-top:20px;" class="container">
        <center><h1 style="font-family: Montserrat;">Create an addition worksheet</h1></center>
        <form action="../go" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="top">First number range</label>
                    <input type="text" name="top" class="form-control" id="top" placeholder="eg. 1-10" maxlength="5" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="bottom">Second number range</label>
                    <input type="text" class="form-control" name="bottom" id="bottom" placeholder="eg. 1-10 or for a single bottom number 9-9" maxlength="5" required>
                </div>
				<div class="form-group col-md-12">
					<h3>Options</h3>
				</div>
				<div class="form-group col-md-6">
                    <label for="name">Add a name to the worksheet (optional)</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="John Smith" maxlength="13">
                </div>
                <div class="form-group col-md-12">
                    
						<label>
							<input type="checkbox" name="alignEqual" id="alignEqual" value="alignEqual" />
							<span>Align equals signs</span>
						</label>
                        
                    
                </div>
                <div class="form-group col-md-12">
						<label>
							<input type="checkbox" name="date" id="date" value="date" checked />
							<span>Add today's date to the worksheet</span>
						</label>
                                            
                </div>
                
            </div>
			<center><button name="submit1" type="submit" class="btn btn-lg btn-outline-primary">Generate PDF</button></center>
        </form>

    <div style="padding-top:25px">
        <?php include "../include/footer.php"; ?>
    </div>

    </div>

