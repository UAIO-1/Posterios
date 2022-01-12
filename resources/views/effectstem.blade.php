<style>
.box2 div{
    position: absolute;
    background-color: transparent;
    border-radius: 10px;
    height: 60px;
    width: 60px;
    border: 6px solid rgba(255, 255, 255, 0.8)
}

.box2 div:nth-child(1){
    top: 80%;
    left: 10%;
    animation: animate 10s linear infinite;
    border-color: #ffc107;
    background-color: #ffc107;
}

.box2 div:nth-child(2){
    top: 30%;
    left: 15%;
    animation: animate 25s linear infinite;
    border-color: #17a2b8;
    background-color: #17a2b8;
}

.box2 div:nth-child(3){
    top: 10%;
    left: 40%;
    animation: animate 9s linear infinite;
    border-color: #dc3545;
    background-color: #dc3545;
}

.box2 div:nth-child(4){
    top: 10%;
    left: 80%;
    animation: animate 18s linear infinite;
    border-color: #28a745;
    background-color: #28a745;
}

.box2 div:nth-child(5){
    top: 50%;
    left: 90%;
    animation: animate 6s linear infinite;
    border-color: #ffc107;
    background-color: #ffc107;

}

.box2 div:nth-child(6){
    top: 15%;
    left: 50%;
    animation: animate 12s linear infinite;
    border-color: #17a2b8;
    background-color: #17a2b8;
}

.box2 div:nth-child(7){
    top: 60%;
    left: 80%;
    animation: animate 15s linear infinite;
    border-color: #dc3545;
    background-color: #dc3545;
}

.box2 div:nth-child(8){
    top: 50%;
    left: 10%;
    animation: animate 20s linear infinite;
    border-color: #28a745;
    background-color: #28a745;
}

.box2 div:nth-child(9){
    top: 20%;
    left: 60%;
    animation: animate 9s linear infinite;
    border-color: #ffc107;
    background-color: #ffc107;
}

.box2 div:nth-child(10){
    top: 15%;
    left: 85%;
    animation: animate 10s linear infinite;
    border-color: #17a2b8;
    background-color: #17a2b8;
}

.box2 div:nth-child(11){
    top: 40%;
    left: 5%;
    animation: animate 10s linear infinite;
    border-color: #dc3545;
    background-color: #dc3545;
}

.box2 div:nth-child(12){
    top: 30%;
    left: 30%;
    animation: animate 10s linear infinite;
    border-color: #28a745;
    background-color: #28a745;
}

@keyframes animate{
    0%{
        transform: scale(0) translateY(0) rotate(0);
        opacity: 1;
    }
    100%{
        transform: scale(1.3) translateY(-90px) rotate(360deg);
        opacity: 0;
    }
}

</style>

<div class="box2 p-5 text-white" style="font-size: 30px">
    <div class="d-flex align-items-center justify-content-center">S</div>
    <div class="d-flex align-items-center justify-content-center">T</div>
    <div class="d-flex align-items-center justify-content-center">E</div>
    <div class="d-flex align-items-center justify-content-center">M</div>
    <div class="d-flex align-items-center justify-content-center">S</div>
    <div class="d-flex align-items-center justify-content-center">T</div>
    <div class="d-flex align-items-center justify-content-center">E</div>
    <div class="d-flex align-items-center justify-content-center">M</div>
    <div class="d-flex align-items-center justify-content-center">S</div>
    <div class="d-flex align-items-center justify-content-center">T</div>
    <div class="d-flex align-items-center justify-content-center">E</div>
    <div class="d-flex align-items-center justify-content-center">M</div>
</div>
