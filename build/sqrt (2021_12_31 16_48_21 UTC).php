<?php include "../include/layout.php"; ?>
<link rel="stylesheet" href="../include/mful.css"></link>
<div style="padding-top:20px" class="container">
    <center><h1  style="font-family: Montserrat;" >Create a square root worksheet</h1></center>
    
        <form action="../go" method="POST">
            <div class="form-row">
				<div class="form-group col-md-12">
					<p>For square roots of squares from 1 to 100 enter 1 in the first box and 100 in the second</p>
				</div>
                <div class="form-group col-md-6">
                    <label  for="top">From what number</label>
                    <input type="text" pattern="[0-9]{1,3}" title="Please only use numbers" name="top" class="form-control" id="top" placeholder="eg. 1" maxlength="3" required>
                </div>
                <div class="form-group col-md-6">
                    <label  for="bottom">Up to what number</label>
                    <input type="text" pattern="[0-9]{1,3}" title="Please only use numbers" class="form-control" name="bottom" id="bottom" maxlength="3" placeholder="eg. 100" required>
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
							<input type="checkbox" name="perfect" id="noknok" value="noknok" checked>
							<span>Use only perfect squares</span>
					</label>
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
			<center><button name="sqrt" type="submit" class="btn btn-lg btn-outline-primary">Generate PDF</button></center>
            </div>
        </form>
    
    <div style="padding-top:25px">
        <?php include "../include/footer.php"; ?>
    </div>
</div>