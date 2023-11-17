function simulateFileUpload(file, delay){
    return new Promise((resolve, reject) => {
        const interval = setInterval(() =>{
            file.uploadedBytes = file.uploadedBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uploadedBytes / file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - progress: 
            ${progress.toFixed(2)}%`);

            if(file.uploadedBytes >= file.totalBytes){
                clearInterval(interval);
                resolve(file);
            }
        }, 100);
    });
}

function simulateMultipleFileUploads(files){
    const UploadPromises = files.map((file, index) => {
        const delay = (index + 1) * 1000; // simulate 1-second delay for each file

        return simulateFileUpload(file, delay);
    });

    return Promise.all(UploadPromises);
}

const filesToUpload = [
    { name: 'file.txt', totalBytes: 100},
    { name: 'file2.jpg', totalBytes: 150},
    { name: 'file3.pdf', totalBytes: 200},
];

simulateMultipleFileUploads(filesToUpload)
.then((uploadedFiles) => {
    console.log('All files uploaded successfully:', uploadedFiles);
})
.catch((error) =>{
    console.error('Error accurrated during file uploads:', error);
});