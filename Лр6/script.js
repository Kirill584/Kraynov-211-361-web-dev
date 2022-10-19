function pow(x, n) {

    let s = prompt("Введите число", '');
    let d = prompt("Введите степень", '');

    let result = s;
  
    for (let i = 1; i < d; i++) {
      result *= s;
    }
  
    alert (result);
  }
  
function gcd(a,b){

    let s = prompt("Введите число", '');
    let d = prompt("Введите число", '');

    while (s!=d){
        if (s > d)
            s = s - d
        else
            d = d - s
    }

    alert (s);
}

function minDigit(x){

    let s = prompt("Введите число", '');

    var min=9;

    while (s>0){ 
        if (s%10<min) 
            min = s%10;
        s = Math.floor(s/10);
    }

    alert(min);
}

function pluralizeRecords(n){

    let s = prompt("Введите число", '');

    if (s % 10 === 1 && s % 100 !== 11) {
        alert("В результате выполнения запроса было найдено "+s+" запись")
    } 
    else if (s % 10 >= 2 && s % 10 <= 4 && (s % 100 < 10 || s % 100 >= 20)) {
        alert("В результате выполнения запроса было найдено "+s+" записи")
    } 
    else {
        alert("В результате выполнения запроса было найдено "+s+" записей")
    }
}

function fibb(n){

    let s = prompt("Введите число", '');

    var fib1 = 1;
    var fib2 = 1;
    var i = 0;

    while (i<s-2){
        fib_sum = fib1 + fib2
        fib1 = fib2
        fib2 = fib_sum
        i = i + 1
    }

    alert(fib2);
}