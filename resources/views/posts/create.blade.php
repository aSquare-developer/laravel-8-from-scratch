<x-layout>
    <section class="py-8 max-w-md mx-auto">

        <h1 class="text-lg font-bold mb-4">
            Publish new post
        </h1>

        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="border border-gray-400 p-2 w-full" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="border border-gray-400 p-2 w-full" required>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" value="{{ old('thumbnail') }}" class="border border-gray-400 p-2 w-full" required>
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" class="border border-gray-400 p-2 w-full" rows="3">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea name="body" id="body" class="border border-gray-400 p-2 w-full" rows="3">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>
                    <select name="category_id" id="category_id">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>

            </form>
        </x-panel>
    </section>
</x-layout>
