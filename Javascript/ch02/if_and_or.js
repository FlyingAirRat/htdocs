function m1(){
    console.log('m1 called');
    return 1;
}

function m2(){
    console.log('m2 called');
}

if(m1()&&m2()){
    //m2()의 return값이 undefined라서 실행 안됨.
    console.log('true or false?');
}