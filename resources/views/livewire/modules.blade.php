<div>
    <h2 class="text-center mb-4">Pilih Kategori Modul</h2>
    <div class="category-tab-wrapper rounded-3">
        <ul class="nav nav-pills nav-fill rounded-3">
            @foreach ($categories as $category)
                <li class="nav-item">
                    <button type="button" wire:click="changeCategory({{ $category->id }})"
                        class="category-tab nav-link {{ $selectedCategoryId == $category->id ? 'active' : '' }}">{{ $category->name }}</button>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="my-4" id="tab-content">
        <div wire:loading.delay wire:loading.delay.longest>...</div>
        <div wire:loading.remove>
            <div class="row row-cols-4 g-4">
                @foreach ($modules as $module)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $module->thumbnail ? asset($module->thumbnail) : asset('assets/images/module-thumbnail.png') }}"
                                class="card-img-top" alt="{{ $module->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $module->title }}</h5>
                                <p class="card-text truncate">{{ $module->description ?? 'Deskripsi Kosong' }}</p>
                                <a href="{{ url("modules/$module->id") }}" class="btn btn-primary">Buka Modul <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
