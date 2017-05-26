@foreach ($posts as $post)
    <div class="row" style="display:table">
        <div class="col-xs-12 col-sm-4 post_index_img">
            <img src="{{ asset($post->page_image) }}" class="post-hero img-responsive">
        </div>
        <div class="col-xs-12 col-sm-12">
            <div class="post-preview">
                <h2 class="post-title">
                    <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                </h2>
                <p class="post-meta">
                    {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
                    <br>
                    @unless ($post->tags->isEmpty())
                        {!! implode(' ', $post->tagLinks()) !!}
                    @endunless
                </p>
                <p class="postSubtitle">
                    {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
                </p>
                <p style="font-size: 13px"><a href="{{ $post->url($tag) }}">READ MORE...</a></p>
            </div>
        </div>
    </div>

    {{-- <div class="post-preview">
        <h2 class="post-title">
            <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
        </h2>
        <p class="post-meta">
            {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
            <br>
            @unless ($post->tags->isEmpty())
                {!! implode(' ', $post->tagLinks()) !!}
            @endunless
        </p>
        <p class="postSubtitle">
            {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }}
        </p>
        <p style="font-size: 13px"><a href="{{ $post->url($tag) }}">READ MORE...</a></p>
    </div>
    <hr> --}}
@endforeach
