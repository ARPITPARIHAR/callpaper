<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View File - {{ $title }}</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Viewing File: {{ $title }}</h1>
        @if ($fileType === 'pdf')
            <embed src="{{ $fileUrl }}" type="application/pdf" width="100%" height="600px" />
        @elseif ($fileType === 'docx')
            <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ urlencode($fileUrl) }}" width="100%" height="600px" frameborder="0"></iframe>
        @else
            <p>Unsupported file type: {{ $fileType }}</p>
        @endif
    </div>
</body>
</html>

