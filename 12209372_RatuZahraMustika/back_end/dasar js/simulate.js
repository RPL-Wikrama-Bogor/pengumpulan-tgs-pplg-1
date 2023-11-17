function simulateFileUpload(file, delay) {
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadedBytes = file.uploadedBytes || 0;
            file.uploadedBytes += 10;

            const progress = (file.uplodedBytes / file.totalBytes) * 100;

            console.log(`uploading ${file.name} - Progress: ${progress.toFixed(2)}%`);
            if (file.uploadedBytes >=  file.totalBytes) {
                clearInterval(interval);

            }
        }, 100);
    });
}

function simulateMultipleFileUploads(file) {
    const uploadPromises = files.map((file, index) => {
        const delay = (index + 1) * 1000; //simulate
        //1-second delay for each file

        return simulateMultipleFileUpload(file, delay);
    });

    return Promise.all(uploadPromises);
}

const filesToUpload = [
    { name: 'file1.txt', totalBytes: 100},
    { name: 'file2.jpg', totalBytes:150},
    { name: 'file3.pdf', totalBytes:200}
];
simulateMultipleFileUploads(filesToUpload)
    .thena((uploadedFiles) => {
        console.log('All files uploaded successfully:', uploadedFiles);
    })
    .catch((error) => {
        console.error('error occured during file uploads:', error);
    });