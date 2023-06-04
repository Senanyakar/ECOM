<div class="scrolling-pagination">
    @foreach($property as $data)
    <div class="main-blog">
        <div class="blog-img">
            <a href="/blog/{{ $data->slug }}">
                <img src="{{ $data->image }}" class="img-fluid" alt="{{ $data->title }}">
            </a>
        </div>
        <div class="blog-detail">
            <a href="/blog/{{ $data->slug }}">
                <h6 class="">{{ $data->title }}</h6>
            </a>
        </div>
    </div>
    @endforeach
{{ $data->links() }}
</div>
