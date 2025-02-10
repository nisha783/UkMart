<div class="category-form-wrap">
    <div class="nice-select select-control country" tabindex="0">
        <span class="current">ALL Categories</span>
        <ul class="list">
            <li data-value="" class="option selected focus">ALL Categories</li>
            @foreach (getAllCategories() as $category)
                <li data-value="vdt" class="option">{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>
    <form class="header-form" action="{{ route('search.store') }}" method="POST">
        @csrf
        <input class="form-control" type="text" wire:model="keyword" name="keyword" placeholder="Search here...">
        <button class="submit rr-primary-btn">Search here</button>
    </form>
</div>
