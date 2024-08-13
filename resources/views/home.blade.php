<ul>
    @foreach ($courses as $course)
        <li>
            judul : {{ $course->name }}
            <br>
            category: {{ $course->categories->pluck('name')->implode(', ') }}
        </li>
    @endforeach
</ul>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Course Name">
    <textarea name="description"></textarea>

    <select name="categories[]" id="categories" multiple>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Create Course</button>
</form>