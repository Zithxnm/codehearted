<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    @vite("resources/css/Community_Edit_Styles.css")
</head>
<body>

<header>
    <a href="{{ url()->previous() }}">&larr; Cancel and Go Back</a>
</header>

<hr>

<main>
    <h1>Edit your {{ $post->Parent_ID ? 'Reply' : 'Discussion' }}</h1>

    <form action="{{ route('community.update', $post->Community_ID) }}" method="POST">
        @csrf
        @method('PUT')

        @if($post->Parent_ID === null)
            <div style="margin-bottom: 15px;">
                <label>Title:</label><br>
                <input type="text" name="Title" value="{{ $post->Title }}" style="width: 100%; padding: 8px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Category:</label><br>
                <select name="Category" style="padding: 8px;" required>
                    <option value="General" {{ $post->Category == 'General' ? 'selected' : '' }}>General</option>
                    <option value="Programming" {{ $post->Category == 'Programming' ? 'selected' : '' }}>Programming</option>
                    <option value="Design" {{ $post->Category == 'Design' ? 'selected' : '' }}>Design</option>
                    <option value="Networks" {{ $post->Category == 'Networks' ? 'selected' : '' }}>Networks</option>
                </select>
            </div>
        @endif

        <div style="margin-bottom: 15px;">
            <label>Content:</label><br>
            <textarea name="Content" rows="10" style="width: 100%; padding: 8px;" required>{{ $post->Content }}</textarea>
        </div>

        <button type="submit">Save Changes</button>
    </form>
</main>

</body>
</html>
