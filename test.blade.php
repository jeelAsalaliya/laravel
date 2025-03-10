<h1>Test Page</h1>

@php
$user = "jeel";
$fruits = ['apple','banana','mango'];
@endphp

<script>
    //var data = {{Js::from($fruits)}};   
    var data = @json($fruits); 
    data.forEach(function(entry) {
        console.log(entry);  
    });
    
      </script>