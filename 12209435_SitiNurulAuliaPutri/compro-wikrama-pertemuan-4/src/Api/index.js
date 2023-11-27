// const URL = "http://127.0.0.1:9000/api/";

async function Get(URL) {
  return await fetch(`${URL}`).then((res) => res.json());
}

async function Post(URL, data){
  return await fetch(`${URL}`, {
    method: "POST",
    body: JSON.stringify(data),
    headers: {
      "Content-Type": "application/json",
    },
  }).then((res) => res.json());
}
export { Get, Post };
