const nilai = 13;
const nilaistring ='A';
const user ={
    name:'',
    userTpe :''
}
//(nilai >10){
//console.log('A')
//}else if(nilai < 7){
 //   console.log('B')
//}else{
  //  console.log('C')
//}

switch(nilaistring){
case 'A':
console.log('Nilai baik')
break;
case 'B':
console.log('Nilai lumayan')
break;
case 'C':
console.log('Nilai jelek')
break;
default:                        //Pengkondisian jika diatas tidak ada
console.log('Eror')
break
}

//penggunaan if atau swich itu ditentukan bagaimana kalau kita ingin membuat sebuah penkondisian dari string maka pakai swich jika number maka bisa pakai if