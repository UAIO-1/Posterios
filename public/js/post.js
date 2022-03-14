var a;

function show_hide() {
    const how = document.getElementById("how");
    if (a == 1){
        how.style.opacity="1";
        fade_in();
        return a = 0;
    }
    else{
        how.style.opacity="0";
        fade_in();
        return a = 1;
    }
}

window.onload = function(){
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const step3 = document.getElementById("step3");
    const step4 = document.getElementById("step4");
    const step5 = document.getElementById("step5");
    const step6 = document.getElementById("step6");

    step1.style.transform="translateX(-60px)";
    step2.style.transform="translateX(-50px)";
    step3.style.transform="translateX(-40px)";
    step4.style.transform="translateX(-30px)";
    step5.style.transform="translateX(-20px)";
    step6.style.transform="translateX(-10px)";
}

function fade_in() {
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const step3 = document.getElementById("step3");
    const step4 = document.getElementById("step4");
    const step5 = document.getElementById("step5");
    const step6 = document.getElementById("step6");

    if (a == 1){
        step1.style.transform="translateX(-60px)";
        step2.style.transform="translateX(-50px)";
        step3.style.transform="translateX(-40px)";
        step4.style.transform="translateX(-30px)";
        step5.style.transform="translateX(-20px)";
        step6.style.transform="translateX(-10px)";
        return a = 0;
    }
    else{
        step1.style.transform="translateX(10px)";
        step2.style.transform="translateX(20px)";
        step3.style.transform="translateX(30px)";
        step4.style.transform="translateX(40px)";
        step5.style.transform="translateX(50px)";
        step6.style.transform="translateX(60px)";
        return a = 1;
    }
}


