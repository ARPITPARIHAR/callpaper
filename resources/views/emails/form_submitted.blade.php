<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            color: #007bff;
        }
    </style>
</head>
<body>
    <h3>Submit ARticle</h3>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Article</td>
            <td>{{ $form->article }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $form->title }}</td>
        </tr>
        <tr>
            <td>Abstract</td>
            <td>{{ $form->abstract }}</td>
        </tr>
        <tr>
            <td>Keywords</td>
            <td>{{ $form->keywords }}</td>
        </tr>
        <tr>
            <td>Reference</td>
            <td>{{ $form->reference}}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>{{ $form->author }}</td>
        </tr>
        <tr>
            <td>Page</td>
            <td>{{ $form->page }}</td>
        </tr>
        <tr>
            <td>Issue</td>
            <td>{{ $form->issue }}</td>
        </tr>
      <!-- Add this section at the end of the table -->
@if (isset($pdfUrl))
<tr>
    <td>PDF URL</td>
    <td><a href="{{ $pdfUrl }}">{{ $pdfUrl }}</a></td>
</tr>
@endif

    </table>
</body>
</html>

