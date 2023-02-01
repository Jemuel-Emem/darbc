<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>

    <style>
div > h3{
    color: gray;
    position: relative;
    top: -15px;
}

#container2{
    right: -90px;
    display: flex;

}

#button{
   top: 200px;
   color: green;
}


    </style>
</head>
<body>



<div class=" container float-start p-3 d-flex position-static">
<div class="col-md-4 col-md-offset-4 d-flex flex-direction-start">
<div class="w-25 d-flex border border-10 rounded-circle "><img src="{{ url('picture/art.jpeg') }}" class="img-fluid "  id="img" alt="..."></div>
<div class="justify-center p-1  ">
    <h1 class=" position-relative top-0 bottom-3 fw-bold" style="color:rgb(54, 15, 73);">DARBC</h1>
        <h3 id="lm" class="text-muted">Land Management</h3>
</div>
</div>
</div>

<div class=" container  p-3 d-flex flex-row-reverse position-absolute " id="container2">
    <div class="col-md-4 col-md-offset-4 d-flex flex-direction-start">
    <div class=" d-flex border border-10 position-relative rounded-circle " style="width: 50px; height:70px; top:10px;"><img src="{{ url('picture/tac.jpg') }}" class="img-fluid rounded-circle" id="img" alt="..."></div>
    <div class="justify-center p-1 position-relative" style="top:11px;" >
        <h2 class=" position-relative top-0 bottom-3 info ">JEMUEL    </h2>
            <h3 id="lm" class="text-muted fs-4">Land Admin</h3>
            <button type="button" class="btn btn-light position-relative   " style="height:40px; top:-80px; left:170px;" >Logout</button>
    </div>


    </div>
    </div>
<div class="d-flex flex-row position-absolute p-3" style="top: 150px; width:96%;"> <input type="text" class="form-control " placeholder="Search.." style="height: 50px;">

  <button type="button" class="btn btn-danger position-relative " style="width: 200px; right:-10px; background-color:rgb(54, 15, 73);">+ Add Land Owner</button>

</div>
<div class="container d-flex position-relative" style="top:80px;">
    <table class="table position-absolute table table-striped table table-striped table-hover" style="top:20px; left:-90px; width:1450px;" >
        <thead class="position-relative " style="height: 55px; left:-2px;">
          <tr class="text-light fs-6 position-relative  " style="background-color:rgb(54, 15, 73);"  >
            <th scope="col ">Name</th>
            <th scope="col">Block</th>
            <th scope="col">Lot</th>
            <th scope="col">Area</th>
            <th scope="col">Status</th>
            <th scope="col">Buyer</th>
            <th scope="col">Date Sold</th>
            <th scope="col">Drawdate</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-muted position-relative position-relative" style="height: 50px;">
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td style="color:rgb(54, 15, 73);">
              <i class="material-icons">calendar_month</i>
              <i class="material-icons">info</i>
              <i class="material-icons">edit</i>
            </td>

          </tr>
          <tr class="text-muted  position-relative" style="height: 50px;">
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td style="color:rgb(54, 15, 73);">  <i class="material-icons">calendar_month</i>
              <i class="material-icons">info</i>
              <i class="material-icons">edit</i></td>

          </tr>

          <tr class="text-muted position-relative" style="height: 50px;">
            <th scope="row">3</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td style="color:rgb(54, 15, 73);">  <i class="material-icons">calendar_month</i>
              <i class="material-icons">info</i>
              <i class="material-icons">edit</i></td>

          </tr>
          <tr class="text-muted  position-relative" style="height: 50px;">
            <th scope="row">4</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td style="color:rgb(54, 15, 73);">  <i class="material-icons">calendar_month</i>
              <i class="material-icons">info</i>
              <i class="material-icons">edit</i></td>

          </tr>

          <tr class="text-muted position-relative" style="height: 50px;">
            <th scope="row">5</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td style="color:rgb(54, 15, 73);">  <i class="material-icons">calendar_month</i>
              <i class="material-icons">info</i>
              <i class="material-icons">edit</i></td>

          </tr>
          <tr class="text-muted position-relative" style="height: 50px;">
            <th scope="row">6</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td style="color:rgb(54, 15, 73);">  <i class="material-icons" >calendar_month</i>
              <i class="material-icons">info</i>
              <i class="material-icons">edit</i></td>

          </tr>

        </tbody>
      </table>
</div>



</body>
</html>
