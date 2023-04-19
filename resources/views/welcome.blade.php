 @extends('layouts.template') <!--invoco al archivo donde esta el template -->

 @section('content')
 @foreach ($proyectos as $proyecto)

 <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
     <figure>
         <img src="{{ $proyecto->imagen }}" alt="img04">
         <figcaption class="fig-caption">
             <i class="fa fa-search"></i>
             <h5 class="title">{{ $proyecto->nombre }}</h5>
             <span class="sub-title">Photograpy</span>
             <a data-fancybox data-src="#mh{{ $proyecto->id }}"></a>
         </figcaption>
     </figure>
 </div>


 <div class="mh-portfolio-modal" id="mh{{ $proyecto->id }}">
     <div class="container">
         <div class="row mh-portfolio-modal-inner">
             <div class="col-sm-5">
                 <h2>{{ $proyecto->nombre }}</h2>
                 <p>{{ $proyecto->descripcion }}</p>

                 <p>It is a clean and elegant Multipurpose Landing Page Template.
                     It will fit perfectly for Startup, Web App or any type of Web Services.
                     It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                     All variations are organized separately so you can use / customize the template very easily.</p>
                 <div class="mh-about-tag">
                     <ul>
                         <li><span>php</span></li>
                         <li><span>html</span></li>
                         <li><span>css</span></li>
                         <li><span>php</span></li>
                         <li><span>wordpress</span></li>
                         <li><span>React</span></li>
                         <li><span>Javascript</span></li>
                     </ul>
                 </div>
                 <a href="{{ $proyecto->url }}" class="btn btn-fill">Live Demo</a>
             </div>
             <div class="col-sm-7">
                 <div class="mh-portfolio-modal-img">
                     <img src="{{ $proyecto->imagen }}" alt="" class="img-fluid">
                     <p>All variations are organized separately so you can use / customize the template very easily.</p>
                     <img src="{{ $proyecto->imagen }}" alt="" class="img-fluid">
                     <p>All variations are organized separately so you can use / customize the template very easily.</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endforeach
 @endsection