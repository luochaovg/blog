<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>layouts test</title>
</head>
<style type="text/css">
    .header{width: 100%; height: 100px; background-color: red;}
    .middle{ width: 100%; height: 300px; background-color: #f2f2f2;}
    .footer{ width: 100%; height: 100px; background-color: gray;}
</style>
<body>
@include('common.header',['page' => 'news'])
<div class="middle">this is news middle</div>
@include('common.footer')
</body>
</html>