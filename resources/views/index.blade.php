<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>活字読める君</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body class="main">
        <h1>活字読める君</h1>


        <form method="post"  action="{{ route('change') }}">
            @csrf

            <label for="FlexTextarea">テキスト</label>
            <div class="FlexTextarea">
                <div class="FlexTextarea__dummy" aria-hidden="true"></div>
                <textarea name="text" id="FlexTextarea" class="FlexTextarea__textarea"></textarea>
            </div>

            <div class="button">
                <button>読める化！</button>
            </div>
        </form>
        <script src="/js/index.js"></script>
    </body>
</html>

{{-- テキストエリア　参照https://qiita.com/tsmd/items/fce7bf1f65f03239eef0 --}}
