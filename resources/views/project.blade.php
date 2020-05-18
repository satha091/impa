@extends('master')

@section('bootstrap')
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/fontAwesome.css">
<link rel="stylesheet" href="css/templatemo-style.css">
@endsection
@section('page-content')
<style>
    .content{
        margin-top: -80px;
    }

    </style>

<li>
    <div class="heading">
      <h1>Our projects</h1>
      <span>Here you can check our recent projects</span>
    </div>
    <div class="cd-half-width fourth-slide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content fourth-content">
              <div class="row">
                <div class="col-md-3 project-item">
                  <a href="img/item-01.jpg" data-lightbox="image-1"><img src="img/project-item-01.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-02.jpg" data-lightbox="image-1"><img src="img/project-item-02.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-03.jpg" data-lightbox="image-1"><img src="img/project-item-03.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-04.jpg" data-lightbox="image-1"><img src="img/project-item-04.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-05.jpg" data-lightbox="image-1"><img src="img/project-item-05.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-06.jpg" data-lightbox="image-1"><img src="img/project-item-06.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-07.jpg" data-lightbox="image-1"><img src="img/project-item-07.jpg"></a>
                </div>
                <div class="col-md-3 project-item">
                  <a href="img/item-08.jpg" data-lightbox="image-1"><img src="img/project-item-08.jpg"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </li>
  @endsection
