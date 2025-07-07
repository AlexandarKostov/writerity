@props(['blog'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="col-span-full md:col-span-4">
            <div class="article-thumbnail flex items-center">
                <a wire:navigate href="{{ route('blog.show', $blog->slug) }}">
                    <img class="mx-auto rounded-xl"
                         src="{{ $blog->getThumbnail() }}"
                         alt="thumbnail">
                </a>
            </div>
        </div>
        <div class="col-span-full md:col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                <x-blog.author-avatar :author="$blog->author"/>
                <span class="text-gray-500 text-xs">. {{ $blog->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('blog.show', $blog->slug) }}">
                    {{ $blog->title }}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{ $blog->getExcerpt() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($blog->articles as $article)
                            <x-blog.article-badge :article="$article"/>
                        @endforeach
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">{{ $blog->getReadTime() }} {{ __('min read') }}</span>
                    </div>
                </div>
                <div>
                    <livewire:like-button :key="'like-' . $blog->id" :$blog/>
                </div>
            </div>
        </div>
    </div>
</article>


