var n1;
//es6 전에 쓰던 방식. 호이스팅 됨.
let n2; //호이스팅 안됨.
const N3 = 12; //상수. 웬만해선 대문자 쓰자. 호이스팅 안됨.
// N3 += 20; error!
n2 = 10;
console.log(n2);

