<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
    <style>
        ul{
            list-style: none;
        }
        ul>li{
            visibility: hidden;
            position: relative;
            border: 1px solid red;
            width: 5vw;
        }
        ul:hover {
            color:red
        }
        ul:hover li{
            visibility: visible;
        }
        
    </style>
<body>
    <ul> 
        Change Lang
        <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>
        <li><a href="{{ url('locale/ru') }}" ><i class="fa fa-language"></i> RU</a></li>
        <li><a href="{{ url('locale/am') }}" ><i class="fa fa-language"></i> AM</a></li>
    </ul>

    
  
    
    
   
    
    <h1>{{ __('messages.string') }}</h1>
    <p>{{__('messages.name')}}</p>

</body>
</html>