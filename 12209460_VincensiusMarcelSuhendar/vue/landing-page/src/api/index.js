const URL = "https://serverwan.com/api-wikrama/public/api/";

async function Get(path){
    return await fetch(`${URL}${path}`).then((res) => res.json());
}   

async function Post(path, data){
    return await fetch(`${URL}${path}`,{
        method: "POST",
        body: JSON.stringify(data),
        headers:{
            "Content-Type": "application/json",
        },
    }).then((res) => res.json());
}

export { Get, Post }