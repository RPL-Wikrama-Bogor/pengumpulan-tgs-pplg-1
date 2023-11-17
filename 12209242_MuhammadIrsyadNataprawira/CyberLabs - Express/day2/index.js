function simulateFileUpload(file, delay) {
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadBytes = file.uploadBytes || 0;
            file.uploadBytes += 10;

            const progress = (file.uploadBytes / file.totalBytes) * 100;

            console.log(`Uploading ${file.name} - Progress: ${progress.toFixed(2)}%`);

            if (file.uploadBytes >= file.totalBytes) {
                clearInterval(interval);
                resolve(file)
            }
        }, 100);
    })
}

function simulateMultipleFileUploads(files) {
    const uploadPromises = files.map((file, index) => {
        const delay = ( index + 1 ) * 1000;

        return simulateFileUpload(file, delay);
    })

    return Promise.all(uploadPromises)
}

const filesToUpload = [
    {
        name: 'data.json',
        totalBytes: 100
    },
    {
        name: 'index.html',
        totalBytes: 150
    },
    {
        name: 'data.test.js',
        totalBytes: 200
    },
]

simulateMultipleFileUploads(filesToUpload)
    .then((uploadedFiles) => {
        console.log('All files uploaded: ', uploadedFiles);
    })
    .catch((err) => console.error(err.message))