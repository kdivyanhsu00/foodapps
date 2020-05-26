<!DOCTYPE html>
<head>
	<title>Food App</title>
	
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css\bootstrap.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



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
		#ingred{
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
			 <a href="{{ route('foodaap.create')}}">List of All Items</a>
		  </div>
		</div>
       
	    <div class="c2">
		  <div class="container">
			<br>
			<h3>Add New Item</h3>
			<hr>
            <form action="{{route('foodaap.store')}}" method="POST" class="form" id="searchBar">
            @csrf
				<div class="row">
				  <div class="col">
					<span>Select Category:</span>
					<select class="form-control" name="category" id="category">
						<option value="">Choose..</option>
					  <option value="Vegetraian">Vegetraian</option>
					  <option value="Non-Vegitrain">Non-Vegitrain</option>
					  <option value="Fastfood">Fastfood</option>
					</select>
				  </div>
				  <div class="col">
					<span>Dish Name:</span>
		<input name="dishname" id="food_name"type="text" class="form-control">
           </select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Description</h6>
					<input name="description" id="name"type="text" class="form-control">
				  </div>
				  <div class="col">
					<h6>Item Type</h6>
				 	<select class="form-control"name="itemtype" id="itemtype">
					  <option>Choose..</option>
					  <option value="Curd related">Curd related</option>
					  <option value="Butter realted">Butter realted</option>
					  <option value="Normal">Normal</option>
					</select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Status</h6>
					<select class="form-control" name="status" id="status">
					  <option>Choose..</option>
					  <option value="Active">Active</option>
					  <option value="Inactive">Inactive</option>
					 
					</select>
				  </div>
				  <div class="col">
					<h6>Image</h6>
				 	<input name="image" id="image" type="file" class="form-control">
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Sort Order</h6>
					<input name="Sort Order" id="name" type="text" class="form-control">
				  </div>
				  <div class="col">
				  	<div class="form-group">
					<h6>Quantity</h6>
					<span class="input-group-text">
						<input type="text" name="quantity" id="quantity" class="form-control">
				 		<select class="form-control" name="quantity_units" >
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
				<div class="row">
				  <div class="col">
            <h6> Final Weight</h6>
          <select class="form-control" name="finalweight" id="finalweight">
            <option>Choose..</option>
            <option value="250">250</option>
            <option value="500">500</option>
            <option value="1000">1000</option>
          </select>
          
					</div>
				  <div class="col">
					<h6>Weight(gms,kg,pound,stone)</h6>
				 	<select class="form-control" name="weight" id="weight">
					  <option>Choose..</option>
					  <option value="gm">gm</option>
					  <option value="kg">kg</option>
					  <option value="pound">pound</option>
					</select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Preparation Time</h6>
					<input name="preparationtime" id="name"type="text" class="form-control">
				  </div>
				  <div class="col">
					<h6>Portion(small,medium,large)</h6>
				 	<select class="form-control"name="portion" id="Portion">
					  <option>Choose..</option>
					  <option value="small">small</option>
					  <option value="medium">medium</option>
					  <option value="large">large</option>
					</select>
				  </div>
				</div>
				<br>
				<h3>Ingredients</h3>
				<h6>Search and add ingredients to the recipe</h6>
				<br>
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="integrity_0" placeholder="Ingredient" name="food_ingredients" id="food_ingredients">
					<td><input type="button" onclick="this.form.reset();"></td>

				</div>
				<br>
			Ingredient
        <div class="container" id="ingred">
          <br>
          <div class="row">
              <div class="col">
              <input type="text" class="form-control" placeholder="Search Food" name="food_name_second" id="food_name_second" value="">


               </div>
        	<div class="col">
			<select class="form-control"name="nutrients" id="nutrients">
            <option>Order By Nutrients...</option>
            <option value="Energy">Energy</option>
            <option value="Fat">Fat</option>
            <option value="Carbohydrate">Carbohydrate</option>
            <option value="Fiber">Fiber</option>
            <option value="Sodium">Sodium</option>
            </select>
			</div>
					
						
             <div class="col">
							<select class="form-control">
								<option>All Database..</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
		
              <table class="table table-bordered" id="dataTable1">
        <thead>
        <tr>
            <th>Quantity</th>
            <th>Quantity_unit</th>
            <th>Recipiename</th>
            <th>Energy</th>
            <th>Fat</th>
            <th>Carbohydrate</th>
            <th>Protein</th>
            <th>Action</th>
            
        </tr>
        </thead>
        <tbody>
        	
        </tbody>
    </table>
    
                  </div>
					<tr>
				 </table>

				 <br>
				</div>
				<br>
				
				<h3>Cooking Method</h3>
				<h6>Give instructions to prepare this recipe</h6>
				<div class="form-group">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">1</span>
					</div>
					<input type="text" class="form-control" name="cookingmethod">
					
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">2</span>
					</div>
					<input type="text" class="form-control" name="cookingmethod">
					</div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<input class="btn btn-primary" type="submit" name="submit" value="Submit">
				  </div>
				</div>
			</form>
        </div>     
	  
	</div>
  <script type="text/javascript">
    $('#category').change(function(){
          var category = this.value;
          $.ajax({
          url:"{{route('get_category')}}",
          type: "post",
          data: {'category_id':category,'_token': "{{ csrf_token() }}"},
          success: function(response){
                data  = jQuery.parseJSON(response); 
                var food = `<option value="">Choose...</option>`  
                $.each(data, (key, val) =>{
                   food +=`<option value="${val.id}">${val.food_name}</option>`;
                });

                $('#food_name').html(food);      
            },
            
          });
    });
  </script>  
  <script>
  $(document).ready(function(){
  $('#food_name_second').keypress(function(){
      var search =  $('#food_name_second').val();
    $.ajax({
      url:"{{route('get_recipie')}}",
      method:"POST",
      data:{'search':search, '_token':"{{ csrf_token() }}"},
      success:function(data){
      	if (data.flag) {
      		$("#dataTable1 > tbody").empty();
      	$.each(data.recipie,function(index, value){
      		var tableRow = `<tr id="recipie_row_`+index+`">
      <td id="quantity_`+index+`"><input type="text" onkeyup="myFunction(this,`+index+`)" class="elementss els_`+index+`" value = "`+value.quantity+`"></td>
      <td id="quantity_unit_`+index+`"><span class="unit_`+index+`">`+value.quantity_unit+`</span></td>
                                <td id="recipiename_`+index+`"><span class="res_`+index+`">`+value.recipiename+`</span></td>
      							<td id="energy_`+index+`"><span class="ener_`+index+`">`+value.Energy+`</span></td>
      							<td id="fat_`+index+`"><span class="fat_`+index+`">`+value.Fat+`</span></td>
      							<td id="carbohydrate_`+index+`"><span class="carbo_`+index+`">`+value.Carbohydrate+`</span></td>
       							<td id="protein_`+index+`"><span class="pro_`+index+`">`+value.protein+`</span></td>
     							<td onclick ="addRecipieDataToIngredients(`+index+`)">Add</td>

      						</tr>`;
      		$("#dataTable1 > tbody").append(tableRow);
      	});
      	}
      }
    });
  
});


// $(".elements").on("keyup",function(){
	
// })


});//end of ready function.
  function addRecipieDataToIngredients(row){
  	var quantity 		= $("#quantity_"+row).text();
  	var quantity_unit 	= $("#quantity_unit_"+row).text();
    var recipiename 	= $("#recipiename_"+row).text();
  	var energy 			= $("#energy_"+row).text();
  	var fat 			= $("#fat_"+row).text();
  	var carbohydrate 	= $("#carbohydrate_"+row).text();
  	var protein 		= $("#protein_"+row).text();

  	$("#integrity_0").val(quantity+","+quantity_unit+","+recipiename+","+energy+","+fat+","+carbohydrate+","+protein);
  }

  function myFunction(obj,index){
  	var quantity = obj.value;
  	var clsName = "ener_"+index;
  	document.getElementsByClassName(clsName)[0].innerHTML = quantity/2; 

  	var clsName = "fat_"+index;
  	document.getElementsByClassName(clsName)[0].innerHTML = quantity/2; 

    var clsName = "carbo_"+index;
  	document.getElementsByClassName(clsName)[0].innerHTML = quantity/2; 

    var clsName = "pro_"+index;
  	document.getElementsByClassName(clsName)[0].innerHTML = quantity/2; 
 
  }
</script>


  <script>
  $(document).ready(function() {
  $('#getdata').DataTable({
  	"processing":true,
  	"serverSide":true,
  	"ajax":"{{route('recipie.getdata') }}",
  	"column":[
                     { data: 'Quantity', name: 'Quantity' },
                     { data: 'Recipiename', name: 'Recipiename' },
                     { data: 'Group', name: 'Group' },
                ]
  	
  
});
 
});
</script>


	
</body>

</html>
