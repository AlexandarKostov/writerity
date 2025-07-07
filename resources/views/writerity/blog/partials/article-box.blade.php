<div class="md:sticky md:top-0">
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
       @if($articles->isEmpty())
            <div class="text-center col-span-3 text-black">
                No new blogs at the moment.
            </div>
        @else
            @foreach($articles as $article)
                <x-blog.article-badge :article="$article"/>
            @endforeach
       @endif
    </div>
</div>
