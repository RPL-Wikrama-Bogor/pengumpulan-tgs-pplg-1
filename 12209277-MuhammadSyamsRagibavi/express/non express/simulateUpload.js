const { rejects } = require("assert");

function fileUpload(file, delay){
    return new Promise((resolve, reject) => {
        const interval = setInterval(() => {
            file.uploadBytes = file.uploadBytes || 0
            file.uploadBytes += 40;

            const progress = file.uploadBytes / file.totalBytes * 100

            console.log(`Uploading ${file.name} - Progress: ${progress}%`)

            if(file.uploadBytes >= file.totalBytes){
                clearInterval(interval);
                resolve(file)
            }
        }, delay)
    })
}

function multipleFileUpload(files){
    const uploadPromises = files.map((file, index) => {
        const delay = (index + 1) * 1000

        return fileUpload(file, delay)
    })
    
    return Promise.all(uploadPromises)
}

const filesToUpload = [
    {
        name: 'file1.jpg', totalBytes: 400,
    },
    {
        name: 'file2.jpg', totalBytes: 500,
    },
    {
        name: 'file3.jpg', totalBytes: 600,
    },
]

multipleFileUpload(filesToUpload).then((uploadedFiles) => {
    console.log('All files have been uploaded', uploadedFiles)
}).catch((error) => {
    console.log('Something went wrong while uploading files', error)
})


