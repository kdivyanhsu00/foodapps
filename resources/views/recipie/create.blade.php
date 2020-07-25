<!DOCTYPE html>
<head>
	<title>Food App</title>
	  <link rel="stylesheet" type="text/css" href="{{ URL::to('css\bootstrap.css') }}">

	<style>
		body {
			background-color:#F8F8F8;
			}
		.c1{
			width:15%;
			height:100%;
			float:left;
			}
		.c2{
			width:85%;
			height:100%;
			float:right; 
			border-left: 1px solid gray;
			}
		#ingre
			background-color:#1E90FF;
			height:20%;
			}
	</style>
</head>
<body bgcolor="gray">
    <div>
	  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div style="width:15%">
		<a class="navbar-brand" href="#"><font color="white">Food App</font></a>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<input class="form-control mr-sm-2" type="search" placeholder="Search">
			<button class="btn-default" type="submit">Search</button>
		</div>
	  </nav>		  
    </div>
	
	<div>
        <div class="c1">
		  <div class="container">
			<br>
			Food<br>
			 <li><a href="{{ route('recipie.create')}}"><i class="glyphicon glyphicon-picture "></i> <span>Add New  Food</span></a></li>
			 <a href="#">List of All Food</a><br>
			<br>
			Items<br>
			 <li><a href="{{ route('foodaap.create')}}"><i class="glyphicon glyphicon-picture "></i> <span>Add New item</span></a></li>
			 <a href="#">List of All Items</a>
		  </div>
		</div>

		<div class="c2">
		  <div class="container">
			<br>
			<h3>Add New food </h3> 
			 <form action="{{route('recipie.store')}}" method="POST">
            	@csrf
           
			<h6>fill in the fields below with the food information</h6>
			<hr>
	 
				<div class="row">
				  <div class="col">
				  	<div class="form-group">
					 <h6>Name</h6>
					<input type="text" name="recipiename" class="form-control">
				</div>
				  </div>
				  <div class="col">
				  	<div class="form-group">
					<h6>Source</h6>
				 	<label type="text" class="form-control" placeholder="My Food"> My Food</label>
				 </div>
				  </div>
				</div>
				<br>       
				<div class="row">
				 <div class="col">
				 	<div class="form-group">
				<h6>Group</h6>
					
					<select class="form-control" name="group" id="foodgroup">
						<option value="0">Select the Food Group..</option>
					  <option value="Dairy and egg products">Dairy and egg products</option>
					  <option value="Species and Herbs">Species and Herbs</option>
					  <option value="Baby foods">Baby foods</option>
					  <option value="Fats and Oils">Fats and Oils</option>
					  <option value="Poultry Products">Poultry Products</option>
					  <option value="Soups,Sauces and Gravies">Soups,Sauces and Gravies</option>
					  <option value="Breakfast Cereals">Breakfast Cereals</option>
					  <option value="Vegetables and Vegetables Products">Vegetables and Vegetables Products</option>
					  <option value="Nuts and Seeds">Nuts and Seeds</option>
					  <option value="Sweets">Sweets</option>
					</select>
				  </div>
				  </div>
				  <div class="col">
				  	<div class="form-group">
					<h6>Quantity</h6>
					<span class="input-group-text">
						<input type="text" name="quantity" class="form-control">
				 		<select class="form-control" name="quantity_unit">
					  <option>Choose..</option>
					  <option value="gm">gm</option>
					  <option value="kg">kg</option>
					  <option value="pound">pound</option> 
					</select>
					</span>
				</div>
				</div>
			</div>
				<br>
				<h4>Nutritional value per 500<h4>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<div class="input-group">
					   <div class="input-group-prepend">
						   <span class="input-group-text" name="energy">Energy</span>
					    </div>
					    <input type="text" class ="form-control" name="Energy">
					    <div class="input-group-append">
						    <span class="input-group-text">kacl</span>
					    </div>
				    </div>
			    </div>
			</div>
				<div class="col-md-6">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text" name="Fat">Fat</span>
					    </div>
					    <input type="text" class ="form-control" name="Fat">
					    <div class="input-group-append">
						    <span class="input-group-text">g</span>
					     </div>
				    </div>
			    </div>
		    </div>
		</div>
			
			<div class="col-md-6">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text" name="Fat">Fat_1</span>
					    </div>
					    <input type="text" class ="form-control" name="Fat_1">
					    <div class="input-group-append">
						    <span class="input-group-text">g</span>
					     </div>
				    </div>
			    </div>
		    </div>
		</div>
		<br>
		<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<div class="input-group">
					   <div class="input-group-prepend">
						   <span class="input-group-text" name="Carbohydrate">Carbohydrate</span>
					    </div>
					    <input type="text" class ="form-control" name="Carbohydrate">
					    <div class="input-group-append">
						    <span class="input-group-text">g</span>
					    </div>
				    </div>
			    </div>
			</div>
				<div class="col-md-6">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text" name="Protein">Protein</span>
					    </div>
					    <input type="text" class ="form-control" name="protein">
					    <div class="input-group-append">
						    <span class="input-group-text">g</span>
					     </div>
				    </div>
			    </div>
		    </div>
		</div>
		<br>
	<h4>Macronutrients<h4>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
				<div class="input-group">
					
						<div class="input-group-prepend">
						    <span class="input-group-text">Cholesterol</span>
					    </div>
					    <input type="text" class ="form-control" name="cholesterol">
   					    <div class="input-group-append">
						    <span class="input-group-text">mg</span>
					    </div>
					</div>
				</div>
            </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						    <div class="input-group-prepend">
						        <span class="input-group-text">Fiber</span>
					        </div>
					            <input type="text" class ="form-control" name="fiber">
					        <div class="input-group-append">
						        <span class="input-group-text">g</span>
					        </div>
					    </div>
				    </div>
                </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						    <div class="input-group-prepend">
						        <span class="input-group-text">Sodium</span>
					        </div>
					        <input type="text" class ="form-control" name="sodium">
					        <div class="input-group-append">
						        <span class="input-group-text">mg</span>
					        </div>
				        </div>
				    </div>
                </div>
        </div>			
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Water</span>
					    </div>
					  <input type="text" class ="form-control" name="water">
					   <div class="input-group-append">
						<span class="input-group-text">g</span>
					   </div>
					</div>
				    </div>
                 </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Vitamin A</span>
					    </div>
					    <input type="text" class ="form-control" name="vitaminA">
					     <div class="input-group-append">
						     <span class="input-group-text">ug</span>
					     </div>
					 </div>
				    </div>
                </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						   <span class="input-group-text">VitaminB-6</span>
					    </div>
					    <input type="text" class ="form-control" name="vitaminB6">
					    <div class="input-group-append">
						    <span class="input-group-text">mg</span>
					    </div>
					</div>
				    </div>
                </div>
        </div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Lactose</span>
					    </div>
					  <input type="text" class ="form-control" name="lactose">
					   <div class="input-group-append">
						<span class="input-group-text">g</span>
					   </div>
				    </div>
				</div>
                 </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Alochol</span>
					    </div>
					    <input type="text" class ="form-control" name="alochol">
					     <div class="input-group-append">
						     <span class="input-group-text">g</span>
					     </div>
					 </div>
				    </div>
                </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						   <span class="input-group-text">Caffine</span>
					    </div>
					    <input type="text" class ="form-control" name="caffine">
					    <div class="input-group-append">
						    <span class="input-group-text">mg</span>
					    </div>
				    </div>
				</div>
                </div>
        </div>
        <br>
        <div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Sugar</span>
					    </div>
					  <input type="text" class ="form-control" name="sugar">
					   <div class="input-group-append">
						<span class="input-group-text">g</span>
					   </div>
					</div>
				    </div>
                 </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Calcium</span>
					    </div>
					    <input type="text" class ="form-control" name="calcium">
					     <div class="input-group-append">
						     <span class="input-group-text">mg</span>
					     </div>
					 </div>
				    </div>
                </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						   <span class="input-group-text">Iron</span>
					    </div>
					    <input type="text" class ="form-control" name="iron">
					    <div class="input-group-append">
						    <span class="input-group-text">mg</span>
					    </div>
				    </div>
				</div>
                </div>
        </div>
        <br>
        <div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Zinc</span>
					    </div>
					  <input type="text" class ="form-control" name="zinc">
					   <div class="input-group-append">
						<span class="input-group-text">mg</span>
					   </div>
				    </div>
				</div>
                 </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Copper</span>
					    </div>
					    <input type="text" class ="form-control" name="copper">
					     <div class="input-group-append">
						     <span class="input-group-text">mg</span>
					     </div>
					 </div>
				    </div>
                </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						   <span class="input-group-text">floride</span>
					    </div>
					    <input type="text" class ="form-control" name="floride">
					    <div class="input-group-append">
						    <span class="input-group-text">ug</span>
					    </div>
				    </div>
				</div>
                </div>
        </div>
        <br>
         <div class="row">
				<div class="col-md-4">
                   <div class="form-group">

					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Vitamin B-12</span>
					    </div>
					  <input type="text" class ="form-control"name="vitaminB12">
					   <div class="input-group-append">
						<span class="input-group-text">mg</span>
					   </div>
				    </div>
				</div>
                 </div>			
				<div class="col-md-4">
				 <div class="form-group">

					<div class="input-group">

						<div class="input-group-prepend">
						    <span class="input-group-text">Vitamin C</span>
					    </div>
					    <input type="text" class ="form-control"name="vitaminC">
					     <div class="input-group-append">
						     <span class="input-group-text">mg</span>
					     </div>
				    </div>
                </div>
            </div>
				<div class="col-md-4">
					<div class="form-group">

					<div class="input-group">

						<div class="input-group-prepend">
						   <span class="input-group-text">Vitamin D</span>
					    </div>
					    <input type="text" class ="form-control"name="vitaminD">
					    <div class="input-group-append">
						    <span class="input-group-text">mg</span>
					    </div>
				    </div>
                </div>
            </div>
        </div>
      		
        <br>
        <div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Vitamin E</span>
					    </div>
					  <input type="text" class ="form-control" name="vitaminE">
					   <div class="input-group-append">
						<span class="input-group-text">g</span>
					   </div>
				    </div>
				</div>
                 </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text">Calcium</span>
					    </div>
					    <input type="text" class ="form-control" name="calcium">
					     <div class="input-group-append">
						     <span class="input-group-text">mg</span>
					     </div>
				    </div>
				</div>
                </div>			
				<div class="col-md-4">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						   <span class="input-group-text">Iron</span>
					    </div>
					    <input type="text" class ="form-control" name="iron">
					    <div class="input-group-append">
						    <span class="input-group-text">mg</span>
					    </div>
					</div>
				    </div>
                </div>
        </div>
        <br>
<br>
			<div class="row">
				  <div class="col">
				  	<div class="form-group">
					<input class="btn btn-primary" type="submit" name="submit" value="Submit">
					
				</div>
				  </div>
			</div>
			
			</div>
	</form>
   </div>     
	  
</div>  
	
</body>
</html>
