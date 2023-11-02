
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
       <form action="/posts/{{ $post->id }}" method="POST">
           @csrf
           @method('PUT')
           <div class="content_title">
               <h2>Title</h2>
               <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
               <p class="title_error" style="color:red">{{ $errors->first('post.title')}}</p>
           </div>
           <div class="content_body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も１日お疲れさまでした。" >{{ $post->body }}</textarea>
               <p class="body_error" style="color:red">{{ $errors->first('post.body')}}</p>
           </div>
           <input type="submit" value="update"/>
       </form>
        <div class='footer'>
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
</html>