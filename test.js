function second(){
    console.log(2);
}

function first(){
    console.log(1);
}

function order(f, callback){
    callback();
}

order(first, second);