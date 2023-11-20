<template>
    <div class="container">
        <div class="row-contact">
            <div class="contact-img">
                <img src="@/assets/img/contact.svg" alt="contact">
            </div>
            <div class="form-contact">
                <h2>Contact</h2>
                <div class="input-form">
                    <label for="">Name </label>
                    <input type="text" class="input" v-model="formData.name" placeholder="Enter Name">

                </div>
                <div class="input-form">
                    <label for="">Email </label>
                    <input type="email" class="input" v-model="formData.email" placeholder="Enter Email">

                </div>
                <div class="input-form">
                    <label for="">Phone </label>
                    <input type="number" class="input" v-model="formData.phone" placeholder="Enter Phone">

                </div>
                <div class="input-form">
                    <label for="">Message </label>
                    <textarea placeholder="Enter Message" v-model="formData.message"  cols="30" class="input" rows="30"></textarea>
                </div>
                <div class="input-form">
                    <div>
                        <button class="btn-service" @click="submitForm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone: "",
                message: ""
            }
        }
    },
    methods: {
        submitForm() {
            const endpoint = "http://localhost:9000/api/contact"
            const requestOptions = {
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify(this.formData)
            }

            fetch(endpoint, requestOptions)
                .then(response => response.json())
                .then(data => {
                    alert('Pesan terkirim, terimakasih :)')
                    console.log(data);
                })
                .catch(err => {
                    alert('Pesan tidak terkirim, form masih kosong')
                    console.error('Terjadi kesalahan: ', err.message);
                })
        }
    }
}
</script>

<style scoped>
.row-contact {
    display: flex;
    margin-top: 10px;
    align-items: center;
}

.contact-img {
    width: 50%;
}

.form-contact {
    width: 50%;
    display: flex;
    flex-direction: column;
}

.contact-img img {
    width: 80%;
}

.input-form {
    width: 80%;
    position: relative;
    display: flex;
    margin: 8px 5px;
    flex-direction: column;
}

.input-form label {
    margin-bottom: 5px;
}

.input {
    width: 100%;
    padding: 12px 15px;
    height: 20px;
    font-size: 16px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    color: black;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    /* border: none; */
}

.input:focus {
    outline: none;
}

@media (max-width: 768px) {
    .row-contact {
        flex-direction: column;
    }
}
</style>