<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tin tức</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 20px;
        }
        .sidebar {
            width: 250px;
            margin-right: 20px;
            border-right: 1px solid #ccc;
            padding-right: 20px;
        }
        .content {
            flex-grow: 1;
        }
        .news-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Danh mục tin tức</h3>
        <ul>
            @foreach ($news as $category)
                <li>{{ $category->title }}</li>
            @endforeach
        </ul>
    </div>

    <div class="content">
        <h2>Danh sách tin tức</h2>
        @foreach ($news as $item)
            <div class="news-item">
                <h3><a href="">{{ $item->title }}</a></h3>
                <p>{{ Str::limit($item->content, 100) }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
