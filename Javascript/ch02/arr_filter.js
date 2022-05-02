var arr = [2,6,10,11,22,1,7];

var resultArr = arr.filter(function(item, idx){
    // console.log(`${idx}: ${item}`);
    if(item <= 8){
        return true;
    }
});
console.log(resultArr);

var newArr = [];
newArr.push(10);
console.log(newArr);