var diam=9;
var weight=1;
var gost='';
var diam=2;
var wireLength=1;

function show(){
	gost=document.getElementById('gost').value;
	diam=document.getElementById('diam').value;
	if (!(gost=='7668' || gost=='2688') ){
		document.getElementById('inputWeight').innerHTML='Введите правильный ГОСТ'; // сообщение о несоответствии введенного ГОСТа условиям
		return;}
	if (diam<3 || diam>50){
		document.getElementById('inputWeight').innerHTML='Введите правильный диаметр'; // сообщение о несоответствии введенногодиаметра условиям
		return;}
	if(gost=='7668'){
		init();
	}else {init2();}
}

function init2(){// инициализация массива с канатом по ГОСТу 2688
	var wire= [{d:3.6, w:48.8},
					{d:3.8, w:55.1},
					{d:4.1, w:64.1},
					{d:4.5, w:73.9},
					{d:4.8, w:84.4},
					{d:5.1, w:95.5},
					{d:5.6, w:116.5},
					{d:6.2, w:141.6},
					{d:6.9, w:176.6},
					{d:7.6, w:211},
					{d:8.3, w:256},
					{d:9.1, w:305},
					{d:9.6, w:358.6},
					{d:11, w:461.6},
					{d:12, w:527},
					{d:13, w:596.6},
					{d:14, w:728},
					{d:15, w:844},
					{d:16.5, w:1025},
					{d:18, w:1220},
					{d:19.5, w:1405},
					{d:21, w:1635},
					{d:22.5, w:1850},
					{d:24, w:2110},
					{d:25.5, w:2390},
					{d:27, w:2685},
					{d:28, w:2910},
					{d:30.5, w:3490},
					{d:32, w:3845},
					{d:33.5, w:4220},
					{d:37, w:5015},
					{d:39.5, w:5740},
					{d:42, w:6435},
					{d:44.5, w:7385},
					{d:47.5, w:8430},];
		calc(wire);  // вызываем функцию расчета с передачей ей ранее инициализированного массива			
}

      

function init(){ // инициализация массива с канатом по ГОСТу 7668
	var wire = [{d:8.1, w:253.5},
					{d:9, w:310.5},
					{d:9.7, w:383.5},
					{d:11.5, w:513},
					{d:13.5, w:696.5},
					{d:15, w:812},
					{d:16.5, w:1045},
					{d:18, w:1245},
					{d:20, w:1520},
					{d:22, w:1830},
					{d:23.5, w:2495},
					{d:27, w:2800},
					{d:29, w:3215},
					{d:31, w:3655},
					{d:33, w:4155},
					{d:34.5, w:4550},
					{d:36.5, w:4965},
					{d:38, w:5510},
					{d:39.5, w:6080},
					{d:42, w:6750},
					{d:43, w:7120},
					{d:44.5, w:7770},
					{d:46.5, w:8400},
					{d:48.5, w:9155},
					{d:50.5, w:9940},
					{d:53.5, w:11150},
					{d:56, w:12050},
					{d:58.5, w:13000}];
	calc(wire);  // вызываем функцию расчета с передачей ей ранее инициализированного массива
}

function calc(wire){
	var deltaV=20;  // переменная в которой хранится текущая мин разница по диаметру
	var deltaL=0;	//  индекс позиции в массиве по которой разница минимальна			 
	for(i=0; i<wire.length; i++){
		if (Math.abs(diam-wire[i].d)<deltaV){ // сравнение переменной с мин разницей 
			deltaV=diam-wire[i].d;
			deltaL=i; // сохранение индекса по подходящему элементу
		}
	}
	window.diam=wire[deltaL].d; // фиксируем результат по диаметру в глоб переменной
	window.weight=wire[deltaL].w; //// фиксируем результат по весу в глоб переменной
	window.wireLength =document.getElementById('wireLength').value; // получаем из формы длину каната
	if(window.wireLength<5000){document.getElementById('inputWeight').innerHTML='Вес каната: '+(window.wireLength*window.weight/1000).toFixed(2)+' кг, '+' диаметр: '+window.diam+' мм'; // присвоение результата
	}else {document.getElementById('inputWeight').innerHTML='Зачем вам так много? :)'}
}

function validate(inp) {
	inp.value = inp.value.replace(/[^\d,.]*/g, '')
		.replace(/([,.])[,.]+/g, '$1')
		.replace(/^[^\d]*(\d+([.,]\d{0,5})?).*$/g, '$1');
}




