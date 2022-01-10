<style>
    .img-country{
        width: 25px;
        height: 25px;
    }
</style>

@if($u->country == "Indonesia")
    <img src="https://img.icons8.com/color/48/000000/indonesia-circular.png" class="img-country">
@elseif ($u->country == "Malaysia")
    <img src="https://img.icons8.com/color/48/000000/malaysia-circular.png" class="img-country">
@endif

