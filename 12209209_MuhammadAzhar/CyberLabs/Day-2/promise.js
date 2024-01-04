function runningTask(nameTask,success, time){

    return new Promise((resolve, reject) => {
         // kode diisi disini
         setTimeout(() => {
             if (success) {
                 resolve(`Tugas ${nameTask} Selesai`)
             } else {
                 reject(`Tugas ${nameTask} belum selesai`)
             }
         },1000)
     });
 }
 
 runningTask('A',true,2000)
     .then((result) => {
         console.log(result);
     })
     .catch((error) => {
         console.log(error);
     })
 
 runningTask('B',false,1000)
     .then((result) => {
         console.log(result);
     })
     .catch((error) => {
         console.log(error);
     })