var arr = [2,6,10,11,22,1,7];
var sum = 0;
for(var i = 0; i<arr.length; i++){
    sum += arr[i];
}

console.log(`sum : ${sum}`);

var evensum = 0;
var sum2 = 0;
arr.forEach(function(item){
    sum2 += item;
    // if(item % 2 === 0 && index < 5){
    //     evensum += item;
    // }
});
console.log(`sum2 : ${evensum}`);