// 請依據以下範本撰寫一個 MyFunc 函式：
// function MyFunc() {
//     // YOUR CODE HERE
// }

// 撰寫完成後，必須可以正常執行以下程式碼：

// var o = MyFunc();

// console.log(o.Key1); // 回傳 1
// console.log(o.Key2); // 回傳 2
// 
function MyFunc() {
	return {
		'Key1':1,
		'Key2':2,

	};
}
var o = MyFunc();

console.log(o.Key1); 
console.log(o.Key2); 


function k1(){
	return 1;
}
function k2(){
	return 2;
}


// 請依據以下範本撰寫一個 MyFunc 函式：
// function MyFunc() {
//     // YOUR CODE HERE
// }

// 撰寫完成後，必須可以正常執行以下程式碼：

// var o = MyFunc();

// console.log(o.GetA()); // 回傳值為 1
// console.log(o.GetB()); // 回傳值為 2

function MyFunc() {
	return {
		'GetA':function(){return 1},
		'GetB':function(){return 2}
	}
}
var o = MyFunc();

console.log(o.GetA());
console.log(o.GetB());


// 請依據以下範本撰寫一個 MyFunc 函式：
// function MyFunc() {
//     // YOUR CODE HERE
// }

// 撰寫完成後，必須可以正常執行以下程式碼：

// var o = MyFunc();
// o.GetCount();  // 輸出 1
// o.GetCount();  // 輸出 2
// o.GetCount();  // 輸出 3 ( 依此類推 )

function MyFunc() {
	var a  =0 ;
	return {
		'GetCount' :function(){
			a++;
			return a
		}
	}
}



var o = MyFunc();
o.GetCount();  // 輸出 1
o.GetCount();  // 輸出 2
o.GetCount();  // 輸出 3 ( 依此類推 )


// 請依據以下範本撰寫一個 MyFunc 函式：
// function MyFunc() {
//     var obj = {
//        a: undefined,
//        b: 0
//     };

//     // YOUR CODE HERE
// }

// 撰寫完成後，必須可以正常執行以下程式碼：

// var o = MyFunc();

// o.get_a() // 回傳 undefined
// o.set_a(3);
// o.get_a();  // 回傳 9
// o.set_a(4);
// o.get_a();  // 回傳 16

// o.get_b() // 回傳 0
// o.set_b(99);
// o.get_b();  // 回傳 99
//


function MyFunc() {
    var obj = {
       a: undefined,
       b: 0
    };
    return{
    	'get_a':function(){
    		return(obj.a === undefined)?obj.a:obj.a * obj.a;
    	},
    	'set_a':function(input){
    		obj.a = input;
    	},
    	'get_b':function(){
    		return obj.b;
    	},
    	'set_b':function(input){
    		obj.b = input;
    	},
    }
}
var o = MyFunc();













