<template>
    <div class="container">
        <div class="row-contact">
            <div class="contact-img">
                <img src="@/assets/img/contact.svg" alt="contact">
            </div>
            <div class="form-contact">
                <h2>Contact</h2>
                <div class="input-form">
                    <label for="">Name</label>
                    <input type="text" v-model="form.name" class="input" placeholder="Enter name">
                </div>
                <div class="input-form">
                    <label for="">Email</label>
                    <input type="text" v-model="form.email" class="input" placeholder="Enter Email">
                </div>
                <div class="input-form">
                    <label for="">Phone</label>
                    <input type="text" v-model="form.phone" class="input" placeholder="Enter Phone">
                </div>
                <div class="input-form">
                    <label for="">Message</label>
                    <textarea type="text" v-model="form.message" class="input" rows="30" cols="30" placeholder="Enter Message"></textarea>
                </div>

                <div class="input-form">
                    <div>
                        <button @click="submit" class="btn-service"> Submit</button>

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
            form: {
                name: '',
                email: '',
                phone: '',
                message: '',
            }
        }
    },
    methods: {
        async submit(){
            const response = await Post('contact', this.form);
            if (response.status == 200) {
                this.form = {
                name: '',
                email: '',
                phone: '',
                message: '',
            }
            alert ('Data Berhasil di tambahkan');
            }
        }
    },
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

.btn-service {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.btn-service:hover {
    background-color: #0056b3;
}
</style>