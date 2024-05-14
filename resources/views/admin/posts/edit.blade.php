<x-layout>

    <x-setting :heading="'Edit The Post: ' . $post->title">

        <form action="/admin/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" :value="old('thumbnail', $post->thumbnail)" type="file" />
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">

            </div>
            @if (!$post->thumbnail)
                <p class="text-xs text-yellow-400">No image was inserted!</p>
            @endif
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>

            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>

                <x-form.label name="category" />

                <select name="category_id" id="category_id">

                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }} </option>
                    @endforeach

                </select>
                <x-form.error name="category"/>
            </x-form.field>

            <x-form.label name="status"/>

            <x-form.radio name="status" id="draft" :post="$post">Draft</x-form.radio>
            <x-form.radio name="status" id="published" :post="$post">Published</x-form.radio>
            <x-form.error name="status" />

            <x-form.button> Update </x-form.button>

        </form>
    </x-setting>

</x-layout>
