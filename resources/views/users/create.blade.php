<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style="pedding:0; margin:0;box-sizing:border-box; font-family: 'instrument-sans', sans-serif;">
    <h1>creat user</h1>
    <form action="{{route('user.store')}}" method="POST" style="display:flex; flex-direction:column; gap:10px; width:300px; margin:0 auto;">
        @csrf
        <label for="name">nome</label>
        <input type="text" name="name" id="name" placeholder="name" 
        value="{{ old('name') }}">
       
        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="email"
        value="{{ old('email') }}" required>
       
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="password">
      
      
        <button type='submit' style="">create</button>
        
    </form>
</body>
</html>