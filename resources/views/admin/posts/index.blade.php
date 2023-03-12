<x-layout>

    <x-setting heading="Manage Posts">

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                @foreach($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/posts/{{ $post->slug }}" class="text-blue-500 hover:underline hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                @csrf
                                @method('DELETE')

                                <button class="text-red-500 hover:text-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </x-setting>


</x-layout>
