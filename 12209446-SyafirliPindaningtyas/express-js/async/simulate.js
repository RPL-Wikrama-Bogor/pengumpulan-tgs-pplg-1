// function simulateFileUpload(file, delay){
//     return new Promise((resolve, reject)=> {
//         const interval = setInterval(()=>{
//             file.uploadedBytes = file.uploadeBytes || 0;
//             file.uploadedbytes += 10;

//             const progress = (file.uploadedBytes / file.totalBytes) * 100;

//             console.log (`Uploading ${file.name} - Progress:
//             ${progress.toFixed(2)}%`);

//             if (file.uploadedBytes >= file.totalBytes){
//                 clearInterval(interval);
//                 resolve(file);
//             }
//         }, 100);
//     })
// }

// function simulateMultipleFileUploads(files) {
//     const uploadPromises = files.map ((file, index) => {
//         const delay = (index + 1) * 1000;

//         return simulateFileUpload(file, delay);
//     });
//     return Promise.all(uploadPromises);
// }
// const filesToUpload = [
//     { name: 'file1.txt', totalBytes: 100 },
//     { name: 'file2.txt', totalBytes: 150 },
//     { name: 'file3.txt', totalBytes: 2000 },
// ];
// simulateMultipleFileUploads(filesToUpload)
// .then((uplodedFiles)=> {
//     console.log('All file uploaded successfully:', uploadedFiles);
// })

// .catch ((error) => {
//     console.error('Error occurred during file uploads:', error);
// });
function simulateFileUpload(file, delay) {
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadBytes = file.uploadBytes || 0;
            file.uploadBytes += 10;

            const progress = (file.uploadBytes / file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - Progress: ${progress.toFixed(2)}%`);

            if (file.uploadBytes >= file.totalBytes) {
                clearInterval(interval);
                resolve(file);
            }
        }, 100);
    });
}

function simulateMultipleFileUploads(files) {
    const uploadPromises = files.map((file, index) => {
        const delay =  (index + 1) * 1000; //Simulate 1-second dalay for each file

        return simulateFileUpload(file, delay);
    });
    return Promise.all(uploadPromises);
}

const filesToUpload = [
    {name: 'file1.txt', totalBytes: 100},
    {name: 'file2.jpg', totalBytes: 150},
    {name: 'file3.pdf', totalBytes: 200}
];

simulateMultipleFileUploads(filesToUpload)
.then((uploadedFiles) => {
    console.log('All files uploaded seccessfully: ', uploadedFiles);
}).catch((error) => {
    console.log('Error occurred during file uploads:', error);
});
