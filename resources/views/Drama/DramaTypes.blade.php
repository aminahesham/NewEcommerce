@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}
.trending-items{
    float:left;
    position: relative;
    text-shadow: 2px 2px 4px #000000;

}
a:hover {
  text-decoration: none;
}



div.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 1px solid #000099;
}

div.gallery img {
  width: 100%;
  height: 300px;
}

div.desc {
  padding: 15px;
  text-align: center;
  color:black;
}

</style>
<div  style="margin:10px; border-color: #996666; border-radius: 15px 50px;" class="">
@foreach($dramas as $item)
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="dramadetails/{{$item['id']}}">
      <img src="{{$item['photo']}}" alt="Cinque Terre" width="200" height="300">
    </a>
    <div class="desc" >{{$item['name']}}</div>
  </div>
</div>
    @endforeach
</div>

</div>
</div>
@endsection