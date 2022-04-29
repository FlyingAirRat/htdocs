var n1;
//es6 전에 쓰던 방식. 호이스팅 됨.

var nn2 = 20;
n1 = 30;
var nn3 = n1 + nn2;

console.log(`nn3 :${nn3}`);
console.log('10' + 10); //php랑은 다르게 문자열 합치기로 작동.
console.log('10' - 10);
console.log('10' * 10);
console.log(10 + 10 * '10');
//= 10 + 100 = 110
console.log('10' + 10 + '10');
//= 1010 + '10' = 101010
let n2; //호이스팅 안됨.

const N3 = 12; //상수. 웬만해선 대문자 쓰자. 호이스팅 안됨.
// N3 += 20;
//저거 실행하면 error뜬다!

n2 = 10;

console.log(n2);

