<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->


    @include('admin.css')

    <style type="text/css">

     .div_center
     {
        text-align:center;
        padding-top:40px;
     }

     .font_size
     {
      font-size: 40px;
      padding-bottom: 40px;
     }

     .text_color
     {
        color: black;
        padding-bottom:  20px;
     }

    label{
      display:inline-block;
      width: 200px;
    }

   .div_design
    {
      padding-bottom:  20px;
    }
    </style>

  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
    <!-- partial -->
     @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
       <div class="content-wrapper">

       @if(session()->has('message'))
         
         <div class="alert alert-success">

         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{ session()->get('message') }}
        
        </div>
       @endif


    <div class="div_center">
        <h1 class="font_size"> Update campground </h1>

        <form action="{{url('/update_campground_confirm',$campground->id)}}" method="POST" enctype="multipart/form-data">
        
      @csrf

        <div class="div_design">
        <label >campground Title</label>
       <input class="text_color" type="text"  name="title"
        placeholder="write a title" required="" value="{{$campground->title}}">
    </div>

    <div class="div_design">
        <label >Campground Description</label>
       <input class="text_color" type="text"  name="description"
        placeholder="write a description" required="" value="{{$campground->description}}">
    </div>

  
    <div class="div_design">
        <label >Location</label>
       <input class="text_color" type="text"  name="dis_price"
        placeholder="write a discount is aply"  value="{{$campground->location}}">
        </div>

       

    <div class="div_design">
        <label >campground catagory</label>
       <select class="text_color" name="catagory" required=""> 
       <option value="{{$campground->catagory}}" selected=""> {{$campground->catagory}} </option>

       @foreach($catagory as $catagory)
       
       <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option> 
       
       @endforeach

    
      
         
        </select>
    </div>


    <div class="div_design">
        <label > Current product image </label>
     <img  style="margin:auto;"  height="100" width="100" src="/campground/{{$campground->image}}">
    
    </div>

     <div class="div_design">
        <label > Change product image </label>
       <input  type="file"  name="image">
    
    </div>

    <div class="div_design">
       
       <input  type="submit"  value="update campground"  class="btn btn-primary ">
      
    </div>
  </form>

  </div>
  </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>