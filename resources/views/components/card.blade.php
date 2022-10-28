 @props(['text', 'auxiliar', 'img','place'])
 <div class="container-fluid d-flex align-items-stretch">
    <div class="col d-flex justify-content-center">
      <div class="card mi_card mt-4" style="width: 16rem;">
        <img src="{{( ($img == "") ? asset ('/img/beer1.jpg') : $img) }}" class="card-img-top cardImage" alt="{{$title}}">
        <div class="card-body d-flex row">
            <h5 class="card-title text-center text-success">{{$title }}</h5>
            <p class="card-text">{{$body }}</p>
            <p class="card-text"><b>{{$place }}</b></p>
            @if ($link != '')
            <p class="text-center mt-auto"><a class="btn btn-primary" href="{{$link}}">Ver màs</a></p>
            @endif
        </div>
    </div>
</div>  
</div>