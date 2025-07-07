<div class="px-3 lg:px-7 py-6">
    <div class="py-4">
        @foreach($this->blogs as $blog)
            <x-blog.article-item :key="$blog->id" :blog="$blog"/>
        @endforeach
    </div>
    <div class="my-1">
        {{ $this->blogs->onEachSide(1)->links() }}
    </div>
</div>
