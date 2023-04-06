<x-layout>
    <div class = "container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                The Aulab Post
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
</x-layout>