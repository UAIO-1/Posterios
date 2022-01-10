<div class="row">
    @foreach ($projects as $p)
    <div class="col-md-3">
        <div class="card m-2">
            <img src="{{ asset('storage/'.$p->project_image) }}" width="250px" height="250px" class="card-img bg-dark" alt="Project Image">
            <div class="card-img-overlay">
                <h3 class="card-title">{{ $p->project_title }}</h3>
                @if ($p->project_description == null)
                    <p class="card-text">No Description...</p>
                @else
                    <p class="card-text">{{Str::limit($p->project_description, 50, '...')}}</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="" class="username-card">
                    <span class="float-left" style="font-weight: bold">
                        <img src="{{ asset('image/icon-logo.PNG') }}" width="25px" height="25px" style="border-radius: 30px" alt="Profile Picture">
                        {{ $p->username }}
                    </span>
                </a>
                <span class="float-right">
                    @if ($p->project_category == "Science")
                        <p class="card-text badge badge-warning text-white">{{ $p->project_category }}</p>
                    @elseif ($p->project_category == "Technology")
                        <p class="card-text badge badge-info">{{ $p->project_category }}</p>
                    @elseif ($p->project_category == "Engineering")
                        <p class="card-text badge badge-danger">{{ $p->project_category }}</p>
                    @else
                        <p class="card-text badge badge-success">{{ $p->project_category }}</p>
                    @endif
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill wishlist" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
