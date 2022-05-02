sum(1,2);
sum(1,2,3,1,2,3,1,2,3,1,2,3,1,2,3,1,2,3,1,2,3,10);
function sum(){
    //console.log(arguments.length);
    let sum = 0;
    for(var i = 0; i < arguments.length; i++){
        sum += arguments[i];
    }
    console.log('sum : '+ sum);
}