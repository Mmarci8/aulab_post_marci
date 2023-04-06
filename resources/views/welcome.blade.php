<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                the aulab post
            </h1>
            @if(session('message'))
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="alert alert-success">
                        {{ session('message')}}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <form class="card p-5 shadow" action="{{route('article.store')}}" method="post" enctype="multipart/form-data"></form>
        @csrf

        @if(session('message'))
           <div class="alert alert-succes text-center">
                {{session('message')}}
           </div>
        @endif

        <div class="container my-5">
            <div class="row justify-content-around">
                 @foreach($articles as $article)
                    <div class="col-12 col-md-3 my-2">
                        <div class="card">
                            <img src="{{Storage::url($article->image)}}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text">{{$article->subtitle}}</p>
                                {{-- <p class="small text-muted fst-italic text-capitalize">{{$article->user->name}}</p> --}}
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                                {{-- Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}} --}}
                                {{-- <a href="{{route('article.byCategory', ['category' => $article->category->idphp ])}}" class="small text-muted fst-italic text-capitalize">leggi</a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
</x-layout>