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
             <li><a href="{{ route('foodaap.create')}}"><i class="glyphicon glyphicon-picture "></i> <span>Add New  Food</span></a></li>
             <a href="{{ route('foodaap.create')}}">List of All Food</a><br>
            <br>
            Items<br>
             <li><a href="#"><i class="glyphicon glyphicon-picture "></i> <span>Add New Food</span></a></li>
             <a href="#">List of All Items</a>
          </div>
        </div>
<section class="content-header">
    <div class="box">
        <div class="row">
            <div class="col-sm-4">
                <h style="color:black;font-size:30px;font-family:Roboto;font-weight:500;font-stretch:normal;font-style:normal;line-height:1.32;letter-spacing:normal;text-align:left;width:121px;height:25px;"
                    ><br>Food List</h>
            </div>
                         
            </div>
        </div>
        <br>
    </div>
</section>
<section class="content-header">
     <div class="row">
        <div class="col-sm-12">
        <h4>foodaap | View</h4>
         </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12 bg-w">
      <div class="row">
        <div class="col-sm-4">
            <div class="cadd">
                <label class="label"> description</label>
            </div>
            <div class="cadd">
                <label class="label"> name</label>
            </div>
              <div class="cadd">
                <label class="label"> category</label>
            </div>
            <div class="cadd">
                <label class="label"> finalweight</label>
            </div>
            <div class="cadd">
                <label class="label"> weight</label>
            </div>
            <div class="cadd">
                <label class="label"> itemtype</label>
            </div>
            <div class="cadd">
                <label class="label"> quantity</label>
            </div>
            <div class="cadd">
                <label class="label"> status</label>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="cadd">
                <p>{{ $foodaap->description }}&nbsp;</p>
            </div>
             <div class="cadd">
                <p>{{ $foodaap->name }}&nbsp;</p>
            </div>
              <div class="cadd">
                <p>{{ $foodaap->category }}&nbsp;</p>
            </div>
            <div class="cadd">
                <p>{{ $foodaap->finalweight }}&nbsp;</p>
            </div>
            <div class="cadd">
                <p>{{ ($foodaap->weight }}&nbsp;</p>
            </div>
            <div class="cadd">
                <p>{{ $foodaap->itemtype }}&nbsp;</p>
            </div>
            <div class="cadd">
                <p>{{ $foodaap->quantity }}&nbsp;</p>
            </div>
            <div class="cadd">
                <p>{{ $foodaap->status }}&nbsp;</p>
            </div>
        </div>
          </div>
        </div>
      </section>
</div>
</body>
</html>
