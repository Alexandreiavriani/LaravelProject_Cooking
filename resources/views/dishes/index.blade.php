@extends('layouts.app')

@section('content')
<div class="bg-image" 
style="background-image: url(&quot;https://cdn.pixabay.com/photo/2020/06/21/16/57/tomatoes-5325850_960_720.jpg&quot);
            height: 450px; position:relative;top:-25px;background-position:center center;
            background-size:cover;">
<h1 style="color:white;font-weight: bold;text-transform:uppercase;text-align:center;position:relative; top:200px;">Best dishes from around the world
</h1>
</div>

<hr>
<h1 style="font-weight:bold;text-align:center;">Foreign and Georgian dishes</h1>




<div style="background-image: url(&quot; https://ethnomed.org/wp-content/uploads/2020/01/chinese-food-omefrans.jpg&quot); background-color:gray;width:150px;height:150px;border-radius:50%;
position:relative;top:30px;margin-left:500px;background-size:cover;">
</div>


 <div><a class="nav-link" href="/china" style='color:black;font-size:25px;cursor:pointer;
 margin-left:520px;position:relative;top:30px;'>China </a>
 </div>



 <div style="background-image: url(&quot; https://cdn.tasteatlas.com/Images/Dishes/d9ae0ef06bc54f7cb4e6b5b928bc6f41.jpg?mw=1300&quot); background-color:gray;width:150px;height:150px;border-radius:50%;
position:relative;top:-175px;margin-left:850px;background-size:cover;">
</div>


 <div><a class="nav-link" href="/georgia" style='color:black;font-size:25px;cursor:pointer;
 margin-left:860px;position:relative;top:-175px;'>Georgia </a>
 </div>


 <div style="background-image: url(&quot; https://www.tasteofhome.com/wp-content/uploads/2018/01/Pizza-from-Scratch_EXPS_FT20_8621_F_0505_1_home-5.jpg?fit=700,1024&quot); background-color:gray;width:150px;height:150px;border-radius:50%;
position:relative;top:-375px;margin-left:1200px;background-size:cover;">
</div>


 <div><a class="nav-link" href="/italy" style='color:black;font-size:25px;cursor:pointer;
 margin-left:1230px;position:relative;top:-375px;'>Italy </a>
 </div>


<br><br><br><br><br><br><br>



@endsection