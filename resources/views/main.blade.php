@extends('layouts.master')


@section('header')  
@include('layouts.header')
@endsection

@section('content')
    <section>
      <div>
          <div class="carousel slide" data-ride="carousel" id="home1">
              <ol class="carousel-indicators">
                <li data-target="#home1" data-slide-to="0" class="active"></li>
                <li data-target="#home1" data-slide-to="1"></li>
                <li data-target="#home1" data-slide-to="2"></li>
                
              </ol>
        <div class="carousel-inner">
          <div class="item bg1 active">
            <img src="assets/images/home1.png" alt="">         
          </div> 
          <div class="item bg1 ">
            <img src="assets/images/home2.jpg" alt="">         
          </div> 
          <div class="item bg1 ">
            <img src="assets/images/home3.jpg" alt="">         
          </div>       
        </div>
      <!--  <a class="right carousel-control" href="#home1" role="button" data-slide="next"><span class="fa fa-chevron-right"></span></a>
        <a class="left carousel-control" href="#home1" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span></a> -->
      </div>
      </div>
      
    </section>
    <hr>
    <section id="hair">
      
    </section>
    <hr>
    <section id="arts">
      
    </section>
    <hr>
    <section id="food">
      
    </section>
    <hr>
    <section id="about">
      <div class="container-fluid well">
        <div class="row" >
        <div class="col-md-4 col-sm-12">
          <div>
        <address>
              <strong style="color:red">African Beauty Bazaar</strong><br>
              Sesenheimerstr. 16<br>
              10627 Berlin - Wilmersdorf<br>
              <abbr title="Phone">P:</abbr> +49 3409 4625 <br>
              <abbr title="Fax">F:</abbr> +49 3409 6846
         </address>    
          </div>
            
        </div>  
        <div class="col-md-4 col-sm-12">
          <div>
          <address>
              <strong style="color:red">Opening Hours</strong><br>
              <span style="color:green">Mo - Sa: 10:00 to 19:00</span>
              <br>
              So: <strong>Closed</strong><br>
         </address>
          </div>

          
        </div>  
        <div class="col-md-4 col-sm-12">
          <div>
            <app-root></app-root>
          </div>
        </div>  
      </div>
      </div>
      
      
    </section>

@endsection

@section('footer')
@include('layouts.footer')
@endsection