function sum(n1, n2){
    return n1 + n2;
}

function sum(n1, n2){
    console.log(1111);
}

var ddd = sum;
//ddd가 가리키는 함수를 변경 가능.

function sum(n1, n2){
    console.log(1113);
}

console.log(ddd(10,20));

